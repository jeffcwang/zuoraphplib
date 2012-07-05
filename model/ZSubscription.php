<?php

/*
 * Created on Jul 2, 2012
 *
 */

class ZSubscription extends Subscription {

	public static $_EVERGREEN = "EVERGREEN";

	public function __construct($contractEffectiveDate, $serviceFffectiveDate) {

		$this->ContractEffectiveDate = $contractEffectiveDate;
		$this->ServiceActivationDate = $serviceFffectiveDate;
		$this->TermType = self :: $_EVERGREEN;
	}

}
?>
