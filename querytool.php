<?php
/*
 * Created on Jun 20, 2012
 *
 */
 
require_once 'service/Utility.php';

$result = Utility::getInstance()->query($argv[1]);
print_r($result);
?>
