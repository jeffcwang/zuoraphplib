<?php
/*
 * Created on Jun 21, 2012
 *
 */

require_once 'ZuoraService.php';

class ZCreditPaymentMethod extends PaymentMethod {

    private static $_TYPE = "CreditCard";

    public function __construct($ccType
                                ,$addressLine1
                                ,$addressLine2
                                ,$city
                                ,$ccState
                                ,$ccPostalCode
                                ,$country
                                ,$expireMonth
                                ,$expireYear
                                ,$ccHolderName
                                ,$ccNumber
                                ,$ccSecurityCode) {

        $this->Type = self::$_TYPE;
        $this->CreditCardType = $ccType;
        $this->CreditCardAddress1 = $addressLine1;
        $this->CreditCardAddress2 = $addressLine2;
        $this->CreditCardCity = $city;
        $this->CreditCardPostalCode = $ccPostalCode;
        $this->State = $ccState;
        $this->Country = $country;
        $this->CreditCardExpirationMonth = $expireMonth;
        $this->CreditCardExpirationYear = $expireYear;
        $this->CreditCardHolderName = $ccHolderName;
        $this->CreditCardNumber = $ccNumber;
        $this->CreditCardSecurityCode = $ccSecurityCode;
    }

}

?>
