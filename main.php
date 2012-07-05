<?php
/**
 * Sample subscribe call
 */


require_once 'ZAPI.php';


// create account
$account = new ZAccount("Test Account");


// create payment method
$ccType="Visa";
$address1="123 Main St";
$address2="Unit 111";
$city="Boston";
$postalCode="02163";
$state="Massachusetts";
$country="United States";
$expireMonth="12";
$expireYear="2020";
$ccHoldName="John Doe";
$ccNumber="1111";
$securityNumber="1234";
$paymentMethod = new ZCreditPaymentMethod($ccType
                                        ,$address1
                                        ,$address2
                                        ,$city
                                        ,$state
                                        ,$postalCode
                                        ,$country
                                        ,$expireMonth
                                        ,$expireYear
                                        ,$ccHoldName
                                        ,$ccNumber
                                        ,$securityNumber);



// create bill contact
$firstName="First";
$lastName="Last";
$address1="123 Main St";
$address2="Unit 111";
$city="Boston";
$state="Massachusetts";
$postalCode="02163";
$country="United States";


$billToContact = new ZContact($firstName
                             ,$lastName
                             ,$address1
                             ,$address2
                             ,$city
                             ,$state
                             ,$postalCode
                             ,$country);


$soldToContact = new ZContact($firstName
                             ,$lastName
                             ,$address1
                             ,$address2
                             ,$city
                             ,$state
                             ,$postalCode
                             ,$country);


// create subscriptionData
$subscription = new ZSubscription(Utility::currentDateTime()
                                ,Utility::currentDateTime());


//create subscription rate plan
$productRatePlan = ZProductService::getProductRatePlanDetailsByName("Bronze");
$ratePlanData = ZSubscriptionService::createSubscriptionRatePlanData($productRatePlan);

//Create a custom quantity
foreach($ratePlanData->RatePlanChargeData as $ratePlanChargeDataObj) {
    if ($ratePlanChargeDataObj->RatePlanCharge->Name === "Recurring per unit") {
        $ratePlanChargeDataObj->RatePlanCharge->Quantity = 20;
    }
}


$subscribeRequest = ZSubscriptionService::subscribe($account,
                                          $paymentMethod,
                                          $billToContact,
                                          $soldToContact,
                                          $subscription,
                                          $ratePlanData);


print_r($subscribeRequest);


?>
