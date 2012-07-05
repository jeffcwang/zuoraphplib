<?php
/*
 * Created on Jun 19, 2012
 *
 */

require_once 'Utility.php';
require_once 'ZOQLUtil.php';

class ZProductService {


	public static function getProductByName($productName) {
        $queryStr = "select Id, Name, Sku, description, createdById, createdDate, updatedById, updatedDate from Product where Name = '$productName'";
        return Utility::getInstance()->query($queryStr);
    }

    //TODO: Filter out AdHoc product
    public static function getFullProductCatalog() {
        $queryStr = "select Id, Name, Sku, description, createdById, createdDate, updatedById, updatedDate from Product";        
        $productsArr =  Utility::getInstance()->query($queryStr);
        self::populateRatePlansForProduct($productsArr);
        return $productsArr;
    }
    
    public static function getProductRatePlansForProduct($productId) {
        $queryStr = "select Id,productId,Name,description,createdById,createdDate from ProductRatePlan where ProductId = '$productId'";                                    
        return Utility::getInstance()->query($queryStr);
    }
        
    public static function getProductRatePlanDetailsByName($name) {
        $queryStr = "select Id,productId,Name, description, createdById, createdDate from ProductRatePlan where name = '$name'"; 
        $productRatePlan = Utility::getInstance()->query($queryStr);
        self::popuplateProductRatePlanChargeInfo($productRatePlan);
        return $productRatePlan;
    }    
    
    
    private static function populateRatePlansForProduct($productsArr) {
        //get all rate plans for each product
       
        foreach ($productsArr as $productObj) {
            $ratePlans = self::getProductRatePlansForProduct($productObj->Id);
            
            //populate all the charge info for every rate plan
            //NOTE: Passed by reference so we can update the object reference
            foreach($ratePlans as &$ratePlan) {
                $fullRatePlanObj = self::getProductRatePlanDetailsByName($ratePlan->Name);        
                $ratePlan =  $fullRatePlanObj;
            }
            $productObj->ProductRatePlans =  $ratePlans;  
        }
    }
    
    
    private static function popuplateProductRatePlanChargeInfo($productRatePlanObj) {

        //Get all the ProductRatePlanCharges. One large fetch is better than multiple soap calls
        $queryStr = "select Id" .
                ",BillingPeriod" .
                ",ChargeModel" .
                ",ChargeType" .
                ",MinQuantity" .
                ",MaxQuantity" .
                ",DefaultQuantity" . 
                ",Name" .
                ",NumberOfPeriod" .
                ",OverageCalculationOption" .
                ",OverageUnusedUnitsCreditOption" .
                ",PriceIncreaseOption" .
                ",PriceIncreasePercentage" .
                ",ProductRatePlanId" .
                ",RevRecTriggerCondition" .
                ",SpecificBillingPeriod" .
                ",UOM " .
                "from ProductRatePlanCharge where ProductRatePlanId = '$productRatePlanObj->Id'"; 
        $productRatePlanCharges = Utility::getInstance()->query($queryStr);
        $productRatePlanObj->productRatePlanCharges = $productRatePlanCharges;
        //ZProduct::populateChargeTierInfo($productRatePlanCharges);
    }
    
    private static function populateChargeTierInfo($productRatePlanCharges) {
        $ids =  array();
        foreach ($productRatePlanCharges as $productRatePlanCharge) {
            $ids[] = $productRatePlanCharge->Id;
        }
        $queryStr = "select Id " .
                    ",Currency " .
                    ",EndingUnit " .
                    ",IsOveragePrice " .
                    ",Price " .
                    ",PriceFormat " .
                    ",ProductRatePlanChargeId " .
                    ",StartingUnit " .
                    ",Tier " .
                    "from ProductRatePlanChargeTier where  "
                    . ZOQLUtil::createORFilter($ids, "ProductRatePlanChargeId");

                 
        $productRatePlanChargeTiers = Utility::getInstance()->query($queryStr);

        //TODO: use hashes to improve performance
        foreach ($productRatePlanCharges as $productRatePlanCharge) {
            foreach($productRatePlanChargeTiers as $productRatePlanChargeTier) {
                if ($productRatePlanChargeTier->ProductRatePlanChargeId == $productRatePlanCharge->Id) {
                    $productRatePlanCharge->RatePlanChargeTier[] = $productRatePlanChargeTier;
                }
            }
        }
    }
       
}
?>
