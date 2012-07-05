<?php
/*
 * Created on Jun 21, 2012
 *
 */
require_once 'ZuoraService.php';


class ZContact extends Contact {
    
    public function __construct($firstName
                                ,$lastName
                                ,$addressLine1
                                ,$addressLine2
                                ,$city
                                ,$ccState
                                ,$ccPostalCode
                                ,$country
                            ) {

        $this->FirstName = $firstName;
        $this->LastName = $lastName;
        $this->CreditCardAddress1 = $addressLine1;
        $this->CreditCardAddress2 = $addressLine2;
        $this->CreditCardCity = $city;
        $this->CreditCardPostalCode = $ccPostalCode;
        $this->State = $ccState;
        $this->Country = $country;
    }
    
    
} 

?>
