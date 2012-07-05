<?php

/*
 * Created on Jun 21, 2012
 *
 */

require_once 'ZuoraService.php';

class ZAccountService {

    
    public static function getAll() {
        $queryStr = "Select"  . Utility::getFieldsForQuery(new Account())
                . " from  Account " ; 
        
        return Utility::getInstance()->query($queryStr);
    }
    
    
    public static function getAccountByName($name) {
        $queryStr = "Select"  . Utility::getFieldsForQuery(new Account())
                . " from Account " 
                . " where Name = '$name'";
                
        return Utility::getInstance()->query($queryStr);
    }
   
    
    public static function getById($id) {
        $queryStr = "Select"  . Utility::getFieldsForQuery(new Account())
                . " from Account " 
                . " where Id = '$id' ";
                
        return Utility::getInstance()->query($queryStr);
    }

}
?>
