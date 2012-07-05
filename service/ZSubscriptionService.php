<?php
/*
 * Created on Jun 21, 2012
 *
 */
 
require_once 'ZuoraService.php';

class ZSubscriptionService {
    
 
     // a special product associated with one time charges
     private static $AD_HOC_CHARGE_OR_CREDIT = "Ad Hoc Charge or Credit";
    
     public static function getAll() {
        $queryStr = "Select"  . Utility::getFieldsForQuery(new Subscription())
                . " from Subscription "; 
        return Utility::getInstance()->query($queryStr);
     }
    
     public static function getByAccountId($accountId) {
        $queryStr = "Select"  . Utility::getFieldsForQuery(new Subscription())
                . " from Subscription "
                . " where AccountId = '$accountId'"; 
        return Utility::getInstance()->query($queryStr);
    }
    
     public static function getById($id) {
        $queryStr = "Select"  . Utility::getFieldsForQuery(new Account())
                . " from Subscription " 
                . " where Id = '$id' ";
                
        return Utility::getInstance()->query($queryStr);
    }
    
    public static function createSubscriptionRatePlanData($productRatePlan) {
        $ratePlanData = new RatePlanData();
        $ratePlanData->RatePlan = new RatePlan();
        $ratePlanData->RatePlan->ProductRatePlanId = $productRatePlan->Id;


        foreach ($productRatePlan->productRatePlanCharges as $productRatePlanCharge) {
            $ratePlanChargeData = new RatePlanChargeData();
            $ratePlanChargeData->RatePlanCharge = new RatePlanCharge();
            $ratePlanChargeData->RatePlanCharge->ProductRatePlanChargeId = $productRatePlanCharge->Id;
            $ratePlanChargeData->RatePlanCharge->TriggerEvent = "ServiceActivation";
            $ratePlanChargeData->RatePlanCharge->Quantity = $productRatePlanCharge->DefaultQuantity;
            $ratePlanChargeData->RatePlanCharge->Name = $productRatePlanCharge->Name;
            $ratePlanChargeData->RatePlanCharge->Price = $productRatePlanCharge->Price;
            $ratePlanChargeData->RatePlanCharge->UOM = $productRatePlanCharge->UOM;
            $ratePlanChargeDataArr[] = $ratePlanChargeData;
            
            
            //$ratePlanChargeData->RatePlanChargeTier = $ratePlanChargeTiers;
            $ratePlanChargeData->RatePlanChargeTier = array();
        }
        
        $ratePlanData->RatePlanChargeData = $ratePlanChargeDataArr;
        return $ratePlanData;
    }
    
    
     public static function subscribe($account, 
                                     $paymentMethod, 
                                     $billToContact, 
                                     $soldToContact,
                                     $subscription,
                                     $ratePlanData) {
        
        $subscribeObj = new subscribe();
        $subscribeRequest = new SubscribeRequest();
        $subscribeRequest->Account=$account;
        $subscribeRequest->PaymentMethod=$paymentMethod;
        $subscribeRequest->BillToContact=$billToContact;
        $subscribeRequest->SoldToContact=$soldToContact;
          
        $subscriptionData = new SubscriptionData();
        $subscriptionData->Subscription = $subscription;
        $subscriptionData->RatePlanData[] = $ratePlanData;
        
        $subscribeRequest->SubscriptionData=$subscriptionData;
        $subscribesArr[] = $subscribeRequest;
        $subscribeObj->subscribes = $subscribesArr; 
        $subscribeResponse = Utility::getInstance()->getZuoraService()->subscribe($subscribeObj);                         
        return $subscribeResponse;
     }
    
    public static function cancelSubscription($subscriptionId, $effectiveDate) {
            
        $amendObj = new amend();
        $amendRequest = new AmendRequest();
                
        $amendment = new amendment();
        $amendment->Type = "Cancellation";
        $amendment->SubscriptionId = $subscriptionId;
        $amendment->ContractEffectiveDate = $effectiveDate;
        $amendment->EffectiveDate = $effectiveDate;
        $amendRequest->Amendments[] = $amendment;
        
                        
        $amendObj->requests[] = $amendRequest;
        return Utility::getInstance()->getZuoraService()->amend($amendObj);
    }
    
    public static function getSubscriptionRatePlan($subscriptionId) {
         $queryStr = "Select"  . Utility::getFieldsForQuery(new RatePlan())
                . " from RatePlan "
                . " where SubscriptionId = '$subscriptionId'"; 
                
          //get all the rate plan charges for each plan
          $ratePlans = Utility::getInstance()->query($queryStr);
          self::populateRatePlanCharges(array($ratePlans));
          
          return $ratePlans;
    }
    
    private static function populateRatePlanCharges($ratePlans) {
        $ids = array();
        $ratePlanLookup = array();
        
        foreach ($ratePlans as $ratePlan) {
            $ids[] = $ratePlan->Id;
            $ratePlanLookup[$ratePlan->Id] = $ratePlan;
        }
        
        
        $queryStr = "Select Price, Quantity, RatePlanId, Id, ProductRatePlanChargeId"  
                . " from RatePlanCharge "
                . " where " .  ZOQLUtil::createORFilter($ids, "RatePlanId");; 
                
        //get all the rate plan charges for each plan
        $ratePlanCharges = Utility::getInstance()->query($queryStr);
        
        if (gettype($ratePlanCharges) != "array") {
            $ratePlanCharges = array($ratePlanCharges);
        }
            
        //associate the charges to the parent rateplan
        foreach ($ratePlanCharges as $ratePlanCharge) {
         
            $ratePlanLookup[$ratePlanCharge->RatePlanId]->ratePlanCharges[] = $ratePlanCharge;                 
        }
    }
    
    
    public static function updateProductSubscription($subscriptionId,
                                                    $subscriptionRatePlanId, 
                                                    $productRatePlanChargeId,
                                                    $contractEffectiveDate, 
                                                    $quantity, 
                                                    $price) {
        
        $amendObj = new amend();
        $amendRequest = new AmendRequest();
        $amendment = new amendment();
        $ratePlanData = new RatePlanData();
        $ratePlan = new RatePlan();
        $ratePlan->AmendmentSubscriptionRatePlanId = $subscriptionRatePlanId;
        $ratePlanChargeData = new RatePlanChargeData();
        
        $ratePlanCharge = new RatePlanCharge();
        $ratePlanCharge->ProductRatePlanChargeId =   $productRatePlanChargeId;
        $ratePlanCharge->Price = $price;
        $ratePlanCharge->Quantity = $quantity;
        
        $ratePlanChargeData->RatePlanCharge = $ratePlanCharge;
        $ratePlanChargeData->RatePlanChargeTier = array();
        $ratePlanData->RatePlan = $ratePlan;
        $ratePlanData->RatePlanChargeData[] = $ratePlanChargeData;
        $amendment->RatePlanData = $ratePlanData;
        $amendment->Type = "UpdateProduct";
        $amendment->Description = "UpdateProduct made using API";
        $amendment->SubscriptionId = $subscriptionId;
        $amendment->ContractEffectiveDate = $contractEffectiveDate;
        $amendRequest->Amendments[] = $amendment;
                            
        $amendObj->requests[] = $amendRequest;
        $amendResponse = Utility::getInstance()->getZuoraService()->amend($amendObj);
        return $amendResponse;
    }
    
    public static function replaceProductRatePlan($subscriptionId,
                                                  $subscriptionRatePlanId,
                                                  $productRatePlanId,
                                                  $contractEffectiveDate) {
        
        
        Utility::getInstance()->addHeaders(array(Utility::getInstance()->getSingleTransactionHeader()));
        
        $removeAmendment = self::removeProductFromSubscription($subscriptionId, $subscriptionRatePlanId, $contractEffectiveDate);   
        $addAmendment = self::addProductToSubscription($subscriptionId, $productRatePlanId, $contractEffectiveDate);   
        
        $createObj = new create();
        $createObj->zObjects[] = $removeAmendment;
        $createObj->zObjects[] = $addAmendment;

        try {
            $response = Utility::getInstance()->getZuoraService()->create($createObj);
        } catch (Exception $e) {
            print($e);
        }
        
        Utility::getInstance()->addHeaders(array());
        return $response;
    }
    
    private static function removeProductFromSubscription($subscriptionId,
                                                          $subscriptionRatePlanId,
                                                          $contractEffectiveDate) {
        
        $amendment = new amendment();
        $ratePlanData = new RatePlanData();
        $ratePlan = new RatePlan();
        $ratePlan->AmendmentSubscriptionRatePlanId = $subscriptionRatePlanId;
        $ratePlanChargeData = new RatePlanChargeData();
        
        $ratePlanCharge = new RatePlanCharge();
        $ratePlanChargeData->RatePlanCharge = $ratePlanCharge;
        $ratePlanChargeData->RatePlanChargeTier = array();

        $ratePlanData->RatePlan = $ratePlan;
        $ratePlanData->RatePlanChargeData[] = $ratePlanChargeData;
        $amendment->RatePlanData = $ratePlanData;
        $amendment->Type = "RemoveProduct";
        $amendment->Description = "RemoveProduct made using API";
        $amendment->SubscriptionId = $subscriptionId;
        $amendment->ContractEffectiveDate = $contractEffectiveDate;
        
        return $amendment;                    
        
    }
    
    private static function addProductToSubscription($subscriptionId,
                                                     $productRatePlanId,
                                                     $contractEffectiveDate) {
      
        $amendment = new amendment();
        $ratePlanData = new RatePlanData();
        $ratePlan = new RatePlan();
        $ratePlan->ProductRatePlanId = $productRatePlanId;
        $ratePlanData->RatePlan = $ratePlan;

        
        $amendment->RatePlanData = $ratePlanData;
        $amendment->Type = "NewProduct";
        $amendment->Description = "NewProduct made using API";
        $amendment->SubscriptionId = $subscriptionId;
        $amendment->ContractEffectiveDate = $contractEffectiveDate;
                            
        return $amendment;
    }
    
    public static function addChargeOrCredit($subscriptionId,
                                             $contractEffectiveDate,
                                             $creditOrCharge) {
        
        Utility::getInstance()->addHeaders(array(Utility::getInstance()->getSingleTransactionHeader()));
        $productInfo = self::getAdHocProductInformation();
        $productRatePlanId = $productInfo[0];
        $productRatePlanChargeId = $productInfo[1];
        
        $createObj = new create();
        
        $addAmendment = self::addProductToSubscription($subscriptionId, $productRatePlanId, $contractEffectiveDate);   
        $addAmendment->Description = "Credit or Charge added";
        
        //add the charge into the amend object
        $ratePlanChargeData = new RatePlanChargeData();
        $ratePlanCharge = new RatePlanCharge();
        $ratePlanCharge->ProductRatePlanChargeId = $productRatePlanChargeId;
        $ratePlanCharge->Price = $creditOrCharge;
        $ratePlanChargeData->RatePlanCharge = $ratePlanCharge;
        $ratePlanChargeData->RatePlanChargeTier = array();
        $ratePlanData->RatePlanChargeData[] = $ratePlanChargeData;
        $addAmendment->RatePlanData->RatePlanChargeData = $ratePlanChargeData;        

        $createObj->zObjects[] = $addAmendment;
        $response = Utility::getInstance()->getZuoraService()->create($createObj);    
        Utility::getInstance()->addHeaders(array());
        
        return $response;
    }
    
    private static function getAdHocProductInformation() {
        $adHocProductRatePlan = ZProductService::getProductRatePlanDetailsByName(self::$AD_HOC_CHARGE_OR_CREDIT);
        return array($adHocProductRatePlan->Id, $adHocProductRatePlan->productRatePlanCharges->Id);
    }
    
} 
?>
