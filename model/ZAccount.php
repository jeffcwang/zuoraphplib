<?php
/*
 * Created on Jul 2, 2012
 *
 */
 
class ZAccount extends Account {
   
    private static $_AUTOSET = "AutoSet";
    private static $_DEFAULT_CURRENCY = "USD";

    public function __construct($accountName) {
        $this->Name = $accountName;
        $this->BcdSettingOption = self :: $_AUTOSET;
        $this->AutoPay = true;
        $this->Currency = self :: $_DEFAULT_CURRENCY;
        $this->BillCycleDay = 0;
    }
 
    
    
    
} 
?>
