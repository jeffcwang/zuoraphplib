<?php

if (!class_exists("zObject")) {
/**
 * zObject
 */
class zObject {
	/**
	 * @access public
	 * @var string[]
	 */
	public $fieldsToNull;
	/**
	 * @access public
	 * @var znsID
	 */
	public $Id;
}}

if (!class_exists("Account")) {
/**
 * Account
 */
class Account extends zObject {
	/**
	 * @access public
	 * @var string
	 */
	public $AccountNumber;
	/**
	 * @access public
	 * @var boolean
	 */
	public $AutoPay;
	/**
	 * @access public
	 * @var double
	 */
	public $Balance;
	/**
	 * @access public
	 * @var string
	 */
	public $BcdSettingOption;
	/**
	 * @access public
	 * @var integer
	 */
	public $BillCycleDay;
	/**
	 * @access public
	 * @var znsID
	 */
	public $BillToId;
	/**
	 * @access public
	 * @var znsID
	 */
	public $CommunicationProfileId;
	/**
	 * @access public
	 * @var znsID
	 */
	public $CreatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $CreatedDate;
	/**
	 * @access public
	 * @var double
	 */
	public $CreditBalance;
	/**
	 * @access public
	 * @var string
	 */
	public $CrmId;
	/**
	 * @access public
	 * @var string
	 */
	public $Currency;
	/**
	 * @access public
	 * @var znsID
	 */
	public $DefaultPaymentMethodId;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $LastInvoiceDate;
	/**
	 * @access public
	 * @var string
	 */
	public $Name;
	/**
	 * @access public
	 * @var string
	 */
	public $Notes;
	/**
	 * @access public
	 * @var znsID
	 */
	public $SoldToId;
	/**
	 * @access public
	 * @var double
	 */
	public $TotalInvoiceBalance;
	/**
	 * @access public
	 * @var znsID
	 */
	public $UpdatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $UpdatedDate;
}}

if (!class_exists("InvoiceAdjustment")) {
/**
 * InvoiceAdjustment
 */
class InvoiceAdjustment extends zObject {
	/**
	 * @access public
	 * @var znsID
	 */
	public $AccountId;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $AdjustmentDate;
	/**
	 * @access public
	 * @var string
	 */
	public $AdjustmentNumber;
	/**
	 * @access public
	 * @var double
	 */
	public $Amount;
	/**
	 * @access public
	 * @var znsID
	 */
	public $CancelledById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $CancelledOn;
	/**
	 * @access public
	 * @var string
	 */
	public $Comments;
	/**
	 * @access public
	 * @var znsID
	 */
	public $CreatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $CreatedDate;
	/**
	 * @access public
	 * @var string
	 */
	public $CustomerName;
	/**
	 * @access public
	 * @var string
	 */
	public $CustomerNumber;
	/**
	 * @access public
	 * @var double
	 */
	public $ImpactAmount;
	/**
	 * @access public
	 * @var znsID
	 */
	public $InvoiceId;
	/**
	 * @access public
	 * @var string
	 */
	public $InvoiceNumber;
	/**
	 * @access public
	 * @var string
	 */
	public $ReferenceId;
	/**
	 * @access public
	 * @var string
	 */
	public $Status;
	/**
	 * @access public
	 * @var string
	 */
	public $TransferredToAccounting;
	/**
	 * @access public
	 * @var string
	 */
	public $Type;
	/**
	 * @access public
	 * @var znsID
	 */
	public $UpdatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $UpdatedDate;
}}

if (!class_exists("InvoiceItemAdjustment")) {
/**
 * InvoiceItemAdjustment
 */
class InvoiceItemAdjustment extends zObject {
	/**
	 * @access public
	 * @var znsID
	 */
	public $AccountId;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $AdjustmentDate;
	/**
	 * @access public
	 * @var string
	 */
	public $AdjustmentNumber;
	/**
	 * @access public
	 * @var double
	 */
	public $Amount;
	/**
	 * @access public
	 * @var znsID
	 */
	public $CancelledById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $CancelledDate;
	/**
	 * @access public
	 * @var string
	 */
	public $Comment;
	/**
	 * @access public
	 * @var znsID
	 */
	public $CreatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $CreatedDate;
	/**
	 * @access public
	 * @var string
	 */
	public $CustomerName;
	/**
	 * @access public
	 * @var string
	 */
	public $CustomerNumber;
	/**
	 * @access public
	 * @var znsID
	 */
	public $InvoiceId;
	/**
	 * @access public
	 * @var string
	 */
	public $InvoiceItemName;
	/**
	 * @access public
	 * @var string
	 */
	public $InvoiceNumber;
	/**
	 * @access public
	 * @var string
	 */
	public $ReferenceId;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $ServiceEndDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $ServiceStartDate;
	/**
	 * @access public
	 * @var string
	 */
	public $SourceId;
	/**
	 * @access public
	 * @var string
	 */
	public $SourceType;
	/**
	 * @access public
	 * @var string
	 */
	public $Status;
	/**
	 * @access public
	 * @var string
	 */
	public $TransferredToAccounting;
	/**
	 * @access public
	 * @var string
	 */
	public $Type;
	/**
	 * @access public
	 * @var znsID
	 */
	public $UpdatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $UpdatedDate;
}}

if (!class_exists("Amendment")) {
/**
 * Amendment
 */
class Amendment extends zObject {
	/**
	 * @access public
	 * @var string
	 */
	public $Code;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $ContractEffectiveDate; 
	/**
	 * @access public
	 * @var znsID
	 */
	public $CreatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $CreatedDate;
	/**
	 * @access public
	 * @var string
	 */
	public $Description;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $EffectiveDate;
	/**
	 * @access public
	 * @var RatePlanData
	 */
	public $RatePlanData;
	/**
	 * @access public
	 * @var string
	 */
	public $Status;
	/**
	 * @access public
	 * @var znsID
	 */
	public $SubscriptionId;
	/**
	 * @access public
	 * @var string
	 */
	public $Type;
	/**
	 * @access public
	 * @var znsID
	 */
	public $UpdatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $UpdatedDate;
}}

if (!class_exists("Contact")) {
/**
 * Contact
 */
class Contact extends zObject {
	/**
	 * @access public
	 * @var znsID
	 */
	public $AccountId;
	/**
	 * @access public
	 * @var string
	 */
	public $Address1;
	/**
	 * @access public
	 * @var string
	 */
	public $Address2;
	/**
	 * @access public
	 * @var string
	 */
	public $City;
	/**
	 * @access public
	 * @var string
	 */
	public $Country;
	/**
	 * @access public
	 * @var znsID
	 */
	public $CreatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $CreatedDate;
	/**
	 * @access public
	 * @var string
	 */
	public $Fax;
	/**
	 * @access public
	 * @var string
	 */
	public $FirstName;
	/**
	 * @access public
	 * @var string
	 */
	public $LastName;
	/**
	 * @access public
	 * @var string
	 */
	public $OtherPhone;
	/**
	 * @access public
	 * @var string
	 */
	public $OtherPhoneType;
	/**
	 * @access public
	 * @var string
	 */
	public $PostalCode;
	/**
	 * @access public
	 * @var string
	 */
	public $State;
	/**
	 * @access public
	 * @var znsID
	 */
	public $UpdatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $UpdatedDate;
	/**
	 * @access public
	 * @var string
	 */
	public $WorkEmail;
}}

if (!class_exists("Invoice")) {
/**
 * Invoice
 */
class Invoice extends zObject {
	/**
	 * @access public
	 * @var znsID
	 */
	public $AccountId;
	/**
	 * @access public
	 * @var double
	 */
	public $AdjustmentAmount;
	/**
	 * @access public
	 * @var double
	 */
	public $Amount;
	/**
	 * @access public
	 * @var double
	 */
	public $Balance;
	/**
	 * @access public
	 * @var string
	 */
	public $Body;
	/**
	 * @access public
	 * @var string
	 */
	public $Comments;
	/**
	 * @access public
	 * @var znsID
	 */
	public $CreatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $CreatedDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $DueDate;
	/**
	 * @access public
	 * @var boolean
	 */
	public $IncludesOneTime;
	/**
	 * @access public
	 * @var boolean
	 */
	public $IncludesRecurring;
	/**
	 * @access public
	 * @var boolean
	 */
	public $IncludesUsage;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $InvoiceDate;
	/**
	 * @access public
	 * @var string
	 */
	public $InvoiceNumber;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $LastEmailSentDate;
	/**
	 * @access public
	 * @var double
	 */
	public $PaymentAmount;
	/**
	 * @access public
	 * @var znsID
	 */
	public $PostedBy;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $PostedDate;
	/**
	 * @access public
	 * @var double
	 */
	public $RefundAmount;
	/**
	 * @access public
	 * @var string
	 */
	public $Status;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $TargetDate;
	/**
	 * @access public
	 * @var string
	 */
	public $TransferredToAccounting;
	/**
	 * @access public
	 * @var znsID
	 */
	public $UpdatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $UpdatedDate;
}}

if (!class_exists("Refund")) {
/**
 * Refund
 */
class Refund extends zObject {
	/**
	 * @access public
	 * @var znsID
	 */
	public $AccountId;
	/**
	 * @access public
	 * @var double
	 */
	public $Amount;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $CancelledOn;
	/**
	 * @access public
	 * @var string
	 */
	public $Comment;
	/**
	 * @access public
	 * @var znsID
	 */
	public $CreatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $CreatedDate;
	/**
	 * @access public
	 * @var string
	 */
	public $Gateway;
	/**
	 * @access public
	 * @var GatewayOptionData
	 */
	public $GatewayOptionData;
	/**
	 * @access public
	 * @var string
	 */
	public $GatewayResponse;
	/**
	 * @access public
	 * @var string
	 */
	public $GatewayResponseCode;
	/**
	 * @access public
	 * @var string
	 */
	public $GatewayState;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $MarkedForSubmissionOn;
	/**
	 * @access public
	 * @var string
	 */
	public $MethodType;
	/**
	 * @access public
	 * @var znsID
	 */
	public $PaymentId;
	/**
	 * @access public
	 * @var znsID
	 */
	public $PaymentMethodId;
	/**
	 * @access public
	 * @var string
	 */
	public $ReferenceID;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $RefundDate;
	/**
	 * @access public
	 * @var string
	 */
	public $RefundNumber;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $RefundTransactionTime;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $SettledOn;
	/**
	 * @access public
	 * @var string
	 */
	public $SourceType;
	/**
	 * @access public
	 * @var string
	 */
	public $Status;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $SubmittedOn;
	/**
	 * @access public
	 * @var string
	 */
	public $TransferredToAccounting;
	/**
	 * @access public
	 * @var string
	 */
	public $Type;
	/**
	 * @access public
	 * @var znsID
	 */
	public $UpdatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $UpdatedDate;
}}

if (!class_exists("RefundInvoicePayment")) {
/**
 * RefundInvoicePayment
 */
class RefundInvoicePayment extends zObject {
	/**
	 * @access public
	 * @var znsID
	 */
	public $CreatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $CreatedDate;
	/**
	 * @access public
	 * @var znsID
	 */
	public $InvoicePaymentId;
	/**
	 * @access public
	 * @var double
	 */
	public $RefundAmount;
	/**
	 * @access public
	 * @var znsID
	 */
	public $RefundId;
	/**
	 * @access public
	 * @var znsID
	 */
	public $UpdatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $UpdatedDate;
}}

if (!class_exists("RefundTransactionLog")) {
/**
 * RefundTransactionLog
 */
class RefundTransactionLog extends zObject {
	/**
	 * @access public
	 * @var string
	 */
	public $BatchId;
	/**
	 * @access public
	 * @var string
	 */
	public $GatewayReasonCode;
	/**
	 * @access public
	 * @var string
	 */
	public $GatewayReasonCodeDescription;
	/**
	 * @access public
	 * @var string
	 */
	public $GatewayState;
	/**
	 * @access public
	 * @var string
	 */
	public $GatewayTransactionType;
	/**
	 * @access public
	 * @var znsID
	 */
	public $RefundId;
	/**
	 * @access public
	 * @var string
	 */
	public $RequestString;
	/**
	 * @access public
	 * @var string
	 */
	public $ResponseString;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $TransactionDate;
	/**
	 * @access public
	 * @var string
	 */
	public $TransactionId;
}}

if (!class_exists("InvoiceItem")) {
/**
 * InvoiceItem
 */
class InvoiceItem extends zObject {
	/**
	 * @access public
	 * @var double
	 */
	public $ChargeAmount;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $ChargeDate;
	/**
	 * @access public
	 * @var string
	 */
	public $ChargeDescription;
	/**
	 * @access public
	 * @var string
	 */
	public $ChargeName;
	/**
	 * @access public
	 * @var string
	 */
	public $ChargeNumber;
	/**
	 * @access public
	 * @var znsID
	 */
	public $CreatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $CreatedDate;
	/**
	 * @access public
	 * @var znsID
	 */
	public $InvoiceId;
	/**
	 * @access public
	 * @var double
	 */
	public $ProcessingType;
	/**
	 * @access public
	 * @var string
	 */
	public $ProductDescription;
	/**
	 * @access public
	 * @var znsID
	 */
	public $ProductId;
	/**
	 * @access public
	 * @var string
	 */
	public $ProductName;
	/**
	 * @access public
	 * @var double
	 */
	public $Quantity;
	/**
	 * @access public
	 * @var znsID
	 */
	public $RatePlanChargeId;
	/**
	 * @access public
	 * @var string
	 */
	public $RevRecCode;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $RevRecStartDate;
	/**
	 * @access public
	 * @var string
	 */
	public $RevRecTriggerCondition;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $ServiceEndDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $ServiceStartDate;
	/**
	 * @access public
	 * @var string
	 */
	public $SKU;
	/**
	 * @access public
	 * @var znsID
	 */
	public $SubscriptionId;
	/**
	 * @access public
	 * @var string
	 */
	public $SubscriptionNumber;
	/**
	 * @access public
	 * @var double
	 */
	public $UnitPrice;
	/**
	 * @access public
	 * @var string
	 */
	public $UOM;
	/**
	 * @access public
	 * @var znsID
	 */
	public $UpdatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $UpdatedDate;
}}

if (!class_exists("InvoicePayment")) {
/**
 * InvoicePayment
 */
class InvoicePayment extends zObject {
	/**
	 * @access public
	 * @var double
	 */
	public $Amount;
	/**
	 * @access public
	 * @var znsID
	 */
	public $CreatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $CreatedDate;
	/**
	 * @access public
	 * @var znsID
	 */
	public $InvoiceId;
	/**
	 * @access public
	 * @var znsID
	 */
	public $PaymentId;
	/**
	 * @access public
	 * @var double
	 */
	public $RefundAmount;
	/**
	 * @access public
	 * @var znsID
	 */
	public $UpdatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $UpdatedDate;
}}

if (!class_exists("Payment")) {
/**
 * Payment
 */
class Payment extends zObject {
	/**
	 * @access public
	 * @var znsID
	 */
	public $AccountId;
	/**
	 * @access public
	 * @var double
	 */
	public $Amount;
	/**
	 * @access public
	 * @var double
	 */
	public $AppliedCreditBalanceAmount;
	/**
	 * @access public
	 * @var double
	 */
	public $AppliedInvoiceAmount;
	/**
	 * @access public
	 * @var string
	 */
	public $AuthTransactionId;
	/**
	 * @access public
	 * @var string
	 */
	public $BankIdentificationNumber;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $CancelledOn;
	/**
	 * @access public
	 * @var string
	 */
	public $Comment;
	/**
	 * @access public
	 * @var znsID
	 */
	public $CreatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $CreatedDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $EffectiveDate;
	/**
	 * @access public
	 * @var GatewayOptionData
	 */
	public $GatewayOptionData;
	/**
	 * @access public
	 * @var string
	 */
	public $GatewayOrderId;
	/**
	 * @access public
	 * @var string
	 */
	public $GatewayResponse;
	/**
	 * @access public
	 * @var string
	 */
	public $GatewayResponseCode;
	/**
	 * @access public
	 * @var string
	 */
	public $GatewayState;
	/**
	 * @access public
	 * @var znsID
	 */
	public $InvoiceId;
	/**
	 * @access public
	 * @var string
	 */
	public $InvoiceNumber;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $MarkedForSubmissionOn;
	/**
	 * @access public
	 * @var znsID
	 */
	public $PaymentMethodId;
	/**
	 * @access public
	 * @var string
	 */
	public $PaymentNumber;
	/**
	 * @access public
	 * @var string
	 */
	public $ReferenceId;
	/**
	 * @access public
	 * @var double
	 */
	public $RefundAmount;
	/**
	 * @access public
	 * @var string
	 */
	public $SecondPaymentReferenceId;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $SettledOn;
	/**
	 * @access public
	 * @var string
	 */
	public $Status;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $SubmittedOn;
	/**
	 * @access public
	 * @var string
	 */
	public $TransferredToAccounting;
	/**
	 * @access public
	 * @var string
	 */
	public $Type;
	/**
	 * @access public
	 * @var znsID
	 */
	public $UpdatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $UpdatedDate;
}}

if (!class_exists("PaymentTransactionLog")) {
/**
 * PaymentTransactionLog
 */
class PaymentTransactionLog extends zObject {
	/**
	 * @access public
	 * @var string
	 */
	public $AVSResponseCode;
	/**
	 * @access public
	 * @var string
	 */
	public $BatchId;
	/**
	 * @access public
	 * @var string
	 */
	public $CVVResponseCode;
	/**
	 * @access public
	 * @var string
	 */
	public $GatewayReasonCode;
	/**
	 * @access public
	 * @var string
	 */
	public $GatewayReasonCodeDescription;
	/**
	 * @access public
	 * @var string
	 */
	public $GatewayState;
	/**
	 * @access public
	 * @var string
	 */
	public $GatewayTransactionType;
	/**
	 * @access public
	 * @var znsID
	 */
	public $PaymentId;
	/**
	 * @access public
	 * @var string
	 */
	public $RequestString;
	/**
	 * @access public
	 * @var string
	 */
	public $ResponseString;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $TransactionDate;
	/**
	 * @access public
	 * @var string
	 */
	public $TransactionId;
}}

if (!class_exists("PaymentMethod")) {
/**
 * PaymentMethod
 */
class PaymentMethod extends zObject {
	/**
	 * @access public
	 * @var znsID
	 */
	public $AccountId;
	/**
	 * @access public
	 * @var string
	 */
	public $AchAbaCode;
	/**
	 * @access public
	 * @var string
	 */
	public $AchAccountName;
	/**
	 * @access public
	 * @var string
	 */
	public $AchAccountNumber;
	/**
	 * @access public
	 * @var string
	 */
	public $AchAccountNumberMask;
	/**
	 * @access public
	 * @var string
	 */
	public $AchAccountType;
	/**
	 * @access public
	 * @var string
	 */
	public $AchBankName;
	/**
	 * @access public
	 * @var boolean
	 */
	public $Active;
	/**
	 * @access public
	 * @var string
	 */
	public $BankIdentificationNumber;
	/**
	 * @access public
	 * @var znsID
	 */
	public $CreatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $CreatedDate;
	/**
	 * @access public
	 * @var string
	 */
	public $CreditCardAddress1;
	/**
	 * @access public
	 * @var string
	 */
	public $CreditCardAddress2;
	/**
	 * @access public
	 * @var string
	 */
	public $CreditCardCity;
	/**
	 * @access public
	 * @var string
	 */
	public $CreditCardCountry;
	/**
	 * @access public
	 * @var integer
	 */
	public $CreditCardExpirationMonth;
	/**
	 * @access public
	 * @var integer
	 */
	public $CreditCardExpirationYear;
	/**
	 * @access public
	 * @var string
	 */
	public $CreditCardHolderName;
	/**
	 * @access public
	 * @var string
	 */
	public $CreditCardMaskNumber;
	/**
	 * @access public
	 * @var string
	 */
	public $CreditCardNumber;
	/**
	 * @access public
	 * @var string
	 */
	public $CreditCardPostalCode;
	/**
	 * @access public
	 * @var string
	 */
	public $CreditCardSecurityCode;
	/**
	 * @access public
	 * @var string
	 */
	public $CreditCardState;
	/**
	 * @access public
	 * @var string
	 */
	public $CreditCardType;
	/**
	 * @access public
	 * @var string
	 */
	public $DeviceSessionId;
	/**
	 * @access public
	 * @var string
	 */
	public $Email;
	/**
	 * @access public
	 * @var GatewayOptionData
	 */
	public $GatewayOptionData;
	/**
	 * @access public
	 * @var string
	 */
	public $IPAddress;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $LastFailedSaleTransactionDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $LastTransactionDateTime;
	/**
	 * @access public
	 * @var string
	 */
	public $LastTransactionStatus;
	/**
	 * @access public
	 * @var integer
	 */
	public $MaxConsecutivePaymentFailures;
	/**
	 * @access public
	 * @var string
	 */
	public $Name;
	/**
	 * @access public
	 * @var integer
	 */
	public $NumConsecutiveFailures;
	/**
	 * @access public
	 * @var string
	 */
	public $PaymentMethodStatus;
	/**
	 * @access public
	 * @var integer
	 */
	public $PaymentRetryWindow;
	/**
	 * @access public
	 * @var string
	 */
	public $PaypalBaid;
	/**
	 * @access public
	 * @var string
	 */
	public $PaypalEmail;
	/**
	 * @access public
	 * @var string
	 */
	public $PaypalPreapprovalKey;
	/**
	 * @access public
	 * @var string
	 */
	public $PaypalType;
	/**
	 * @access public
	 * @var string
	 */
	public $Phone;
	/**
	 * @access public
	 * @var boolean
	 */
	public $SkipValidation;
	/**
	 * @access public
	 * @var integer
	 */
	public $TotalNumberOfErrorPayments;
	/**
	 * @access public
	 * @var integer
	 */
	public $TotalNumberOfProcessedPayments;
	/**
	 * @access public
	 * @var string
	 */
	public $Type;
	/**
	 * @access public
	 * @var znsID
	 */
	public $UpdatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $UpdatedDate;
	/**
	 * @access public
	 * @var boolean
	 */
	public $UseDefaultRetryRule;
}}

if (!class_exists("Product")) {
/**
 * Product
 */
class Product extends zObject {
	/**
	 * @access public
	 * @var znsID
	 */
	public $CreatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $CreatedDate;
	/**
	 * @access public
	 * @var string
	 */
	public $Description;
	/**
	 * @access public
	 * @var string
	 */
	public $Name;
	/**
	 * @access public
	 * @var string
	 */
	public $SKU;
	/**
	 * @access public
	 * @var znsID
	 */
	public $UpdatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $UpdatedDate;
}}

if (!class_exists("ProductRatePlan")) {
/**
 * ProductRatePlan
 */
class ProductRatePlan extends zObject {
	/**
	 * @access public
	 * @var znsID
	 */
	public $CreatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $CreatedDate;
	/**
	 * @access public
	 * @var string
	 */
	public $Description;
	/**
	 * @access public
	 * @var string
	 */
	public $Name;
	/**
	 * @access public
	 * @var znsID
	 */
	public $ProductId;
	/**
	 * @access public
	 * @var znsID
	 */
	public $UpdatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $UpdatedDate;
}}

if (!class_exists("ProductRatePlanCharge")) {
/**
 * ProductRatePlanCharge
 */
class ProductRatePlanCharge extends zObject {
	/**
	 * @access public
	 * @var string
	 */
	public $BillingPeriod;
	/**
	 * @access public
	 * @var string
	 */
	public $ChargeModel;
	/**
	 * @access public
	 * @var string
	 */
	public $ChargeType;
	/**
	 * @access public
	 * @var znsID
	 */
	public $CreatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $CreatedDate;
	/**
	 * @access public
	 * @var double
	 */
	public $DefaultQuantity;
	/**
	 * @access public
	 * @var string
	 */
	public $Description;
	/**
	 * @access public
	 * @var double
	 */
	public $IncludedUnits;
	/**
	 * @access public
	 * @var double
	 */
	public $MaxQuantity;
	/**
	 * @access public
	 * @var double
	 */
	public $MinQuantity;
	/**
	 * @access public
	 * @var string
	 */
	public $Name;
	/**
	 * @access public
	 * @var integer
	 */
	public $NumberOfPeriod;
	/**
	 * @access public
	 * @var string
	 */
	public $OverageCalculationOption;
	/**
	 * @access public
	 * @var string
	 */
	public $OverageUnusedUnitsCreditOption;
	/**
	 * @access public
	 * @var string
	 */
	public $PriceIncreaseOption;
	/**
	 * @access public
	 * @var double
	 */
	public $PriceIncreasePercentage;
	/**
	 * @access public
	 * @var ProductRatePlanChargeTierData
	 */
	public $ProductRatePlanChargeTierData;
	/**
	 * @access public
	 * @var znsID
	 */
	public $ProductRatePlanId;
	/**
	 * @access public
	 * @var string
	 */
	public $RevRecCode;
	/**
	 * @access public
	 * @var string
	 */
	public $RevRecTriggerCondition;
	/**
	 * @access public
	 * @var string
	 */
	public $SmoothingModel;
	/**
	 * @access public
	 * @var integer
	 */
	public $SpecificBillingPeriod;
	/**
	 * @access public
	 * @var string
	 */
	public $UOM;
	/**
	 * @access public
	 * @var znsID
	 */
	public $UpdatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $UpdatedDate;
}}

if (!class_exists("ProductRatePlanChargeTier")) {
/**
 * ProductRatePlanChargeTier
 */
class ProductRatePlanChargeTier extends zObject {
	/**
	 * @access public
	 * @var boolean
	 */
	public $Active;
	/**
	 * @access public
	 * @var znsID
	 */
	public $CreatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $CreatedDate;
	/**
	 * @access public
	 * @var string
	 */
	public $Currency;
	/**
	 * @access public
	 * @var double
	 */
	public $EndingUnit;
	/**
	 * @access public
	 * @var boolean
	 */
	public $IsOveragePrice;
	/**
	 * @access public
	 * @var double
	 */
	public $Price;
	/**
	 * @access public
	 * @var string
	 */
	public $PriceFormat;
	/**
	 * @access public
	 * @var znsID
	 */
	public $ProductRatePlanChargeId;
	/**
	 * @access public
	 * @var double
	 */
	public $StartingUnit;
	/**
	 * @access public
	 * @var integer
	 */
	public $Tier;
	/**
	 * @access public
	 * @var znsID
	 */
	public $UpdatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $UpdatedDate;
}}

if (!class_exists("GatewayOption")) {
/**
 * GatewayOption
 */
class GatewayOption extends zObject {
	/**
	 * @access public
	 * @var string
	 */
	public $name;
	/**
	 * @access public
	 * @var string
	 */
	public $value;
}}

if (!class_exists("RatePlan")) {
/**
 * RatePlan
 */
class RatePlan extends zObject {
	/**
	 * @access public
	 * @var znsID
	 */
	public $AmendmentId;
	/**
	 * @access public
	 * @var znsID
	 */
	public $AmendmentSubscriptionRatePlanId;
	/**
	 * @access public
	 * @var string
	 */
	public $AmendmentType;
	/**
	 * @access public
	 * @var znsID
	 */
	public $CreatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $CreatedDate;
	/**
	 * @access public
	 * @var string
	 */
	public $Name;
	/**
	 * @access public
	 * @var znsID
	 */
	public $ProductRatePlanId;
	/**
	 * @access public
	 * @var znsID
	 */
	public $SubscriptionId;
	/**
	 * @access public
	 * @var znsID
	 */
	public $UpdatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $UpdatedDate;
}}

if (!class_exists("RatePlanCharge")) {
/**
 * RatePlanCharge
 */
class RatePlanCharge extends zObject {
	/**
	 * @access public
	 * @var string
	 */
	public $ApplyDiscountTo;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $ChargedThroughDate;
	/**
	 * @access public
	 * @var string
	 */
	public $ChargeModel;
	/**
	 * @access public
	 * @var string
	 */
	public $ChargeNumber;
	/**
	 * @access public
	 * @var string
	 */
	public $ChargeType;
	/**
	 * @access public
	 * @var znsID
	 */
	public $CreatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $CreatedDate;
	/**
	 * @access public
	 * @var string
	 */
	public $Description;
	/**
	 * @access public
	 * @var double
	 */
	public $DiscountAmount;
	/**
	 * @access public
	 * @var string
	 */
	public $DiscountLevel;
	/**
	 * @access public
	 * @var double
	 */
	public $DiscountPercentage;
	/**
	 * @access public
	 * @var double
	 */
	public $DMRC;
	/**
	 * @access public
	 * @var double
	 */
	public $DTCV;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $EffectiveEndDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $EffectiveStartDate;
	/**
	 * @access public
	 * @var double
	 */
	public $IncludedUnits;
	/**
	 * @access public
	 * @var boolean
	 */
	public $IsLastSegment;
	/**
	 * @access public
	 * @var double
	 */
	public $MRR;
	/**
	 * @access public
	 * @var string
	 */
	public $Name;
	/**
	 * @access public
	 * @var integer
	 */
	public $NumberOfPeriods;
	/**
	 * @access public
	 * @var znsID
	 */
	public $OriginalId;
	/**
	 * @access public
	 * @var string
	 */
	public $OverageCalculationOption;
	/**
	 * @access public
	 * @var double
	 */
	public $OveragePrice;
	/**
	 * @access public
	 * @var string
	 */
	public $OverageUnusedUnitsCreditOption;
	/**
	 * @access public
	 * @var double
	 */
	public $Price;
	/**
	 * @access public
	 * @var double
	 */
	public $PriceIncreasePercentage;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $ProcessedThroughDate;
	/**
	 * @access public
	 * @var znsID
	 */
	public $ProductRatePlanChargeId;
	/**
	 * @access public
	 * @var double
	 */
	public $Quantity;
	/**
	 * @access public
	 * @var znsID
	 */
	public $RatePlanId;
	/**
	 * @access public
	 * @var double
	 */
	public $RolloverBalance;
	/**
	 * @access public
	 * @var integer
	 */
	public $Segment;
	/**
	 * @access public
	 * @var double
	 */
	public $TCV;
	/**
	 * @access public
	 * @var double
	 */
	public $UnusedUnitsCreditRates;
	/**
	 * @access public
	 * @var string
	 */
	public $UOM;
	/**
	 * @access public
	 * @var znsID
	 */
	public $UpdatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $UpdatedDate;
	/**
	 * @access public
	 * @var integer
	 */
	public $UpToPeriods;
	/**
	 * @access public
	 * @var string
	 */
	public $UsageRecordRatingOption;
	/**
	 * @access public
	 * @var integer
	 */
	public $Version;
}}

if (!class_exists("RatePlanChargeTier")) {
/**
 * RatePlanChargeTier
 */
class RatePlanChargeTier extends zObject {
	/**
	 * @access public
	 * @var znsID
	 */
	public $CreatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $CreatedDate;
	/**
	 * @access public
	 * @var double
	 */
	public $EndingUnit;
	/**
	 * @access public
	 * @var boolean
	 */
	public $IsOveragePrice;
	/**
	 * @access public
	 * @var double
	 */
	public $Price;
	/**
	 * @access public
	 * @var string
	 */
	public $PriceFormat;
	/**
	 * @access public
	 * @var znsID
	 */
	public $RatePlanChargeId;
	/**
	 * @access public
	 * @var double
	 */
	public $StartingUnit;
	/**
	 * @access public
	 * @var integer
	 */
	public $Tier;
	/**
	 * @access public
	 * @var znsID
	 */
	public $UpdatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $UpdatedDate;
}}

if (!class_exists("Subscription")) {
/**
 * Subscription
 */
class Subscription extends zObject {
	/**
	 * @access public
	 * @var znsID
	 */
	public $AccountId;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $CancelledDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $ContractEffectiveDate;
	/**
	 * @access public
	 * @var znsID
	 */
	public $CreatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $CreatedDate;
	/**
	 * @access public
	 * @var boolean
	 */
	public $IsInvoiceSeparate;
	/**
	 * @access public
	 * @var string
	 */
	public $Name;
	/**
	 * @access public
	 * @var string
	 */
	public $Notes;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $OriginalCreatedDate;
	/**
	 * @access public
	 * @var znsID
	 */
	public $OriginalId;
	/**
	 * @access public
	 * @var znsID
	 */
	public $PreviousSubscriptionId;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $ServiceActivationDate;
	/**
	 * @access public
	 * @var string
	 */
	public $Status;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $SubscriptionEndDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $SubscriptionStartDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $TermStartDate;
	/**
	 * @access public
	 * @var string
	 */
	public $TermType;
	/**
	 * @access public
	 * @var znsID
	 */
	public $UpdatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $UpdatedDate;
	/**
	 * @access public
	 * @var integer
	 */
	public $Version;
}}

if (!class_exists("Usage")) {
/**
 * Usage
 */
class Usage extends zObject {
	/**
	 * @access public
	 * @var znsID
	 */
	public $AccountId;
	/**
	 * @access public
	 * @var string
	 */
	public $AccountNumber;
	/**
	 * @access public
	 * @var znsID
	 */
	public $ChargeId;
	/**
	 * @access public
	 * @var string
	 */
	public $ChargeNumber;
	/**
	 * @access public
	 * @var znsID
	 */
	public $CreatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $CreatedDate;
	/**
	 * @access public
	 * @var string
	 */
	public $Description;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $EndDateTime;
	/**
	 * @access public
	 * @var znsID
	 */
	public $ImportId;
	/**
	 * @access public
	 * @var znsID
	 */
	public $InvoiceId;
	/**
	 * @access public
	 * @var string
	 */
	public $InvoiceNumber;
	/**
	 * @access public
	 * @var double
	 */
	public $Quantity;
	/**
	 * @access public
	 * @var string
	 */
	public $RbeStatus;
	/**
	 * @access public
	 * @var string
	 */
	public $SourceName;
	/**
	 * @access public
	 * @var string
	 */
	public $SourceType;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $StartDateTime;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $SubmissionDateTime;
	/**
	 * @access public
	 * @var znsID
	 */
	public $SubscriptionId;
	/**
	 * @access public
	 * @var string
	 */
	public $SubscriptionNumber;
	/**
	 * @access public
	 * @var string
	 */
	public $UOM;
	/**
	 * @access public
	 * @var znsID
	 */
	public $UpdatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $UpdatedDate;
}}

if (!class_exists("Import")) {
/**
 * Import
 */
class Import extends zObject {
	/**
	 * @access public
	 * @var znsID
	 */
	public $CreatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $CreatedDate;
	/**
	 * @access public
	 * @var base64Binary
	 */
	public $FileContent;
	/**
	 * @access public
	 * @var integer
	 */
	public $ImportedCount;
	/**
	 * @access public
	 * @var string
	 */
	public $ImportType;
	/**
	 * @access public
	 * @var string
	 */
	public $Md5;
	/**
	 * @access public
	 * @var string
	 */
	public $Name;
	/**
	 * @access public
	 * @var string
	 */
	public $OriginalResourceUrl;
	/**
	 * @access public
	 * @var string
	 */
	public $ResultResourceUrl;
	/**
	 * @access public
	 * @var string
	 */
	public $Status;
	/**
	 * @access public
	 * @var string
	 */
	public $StatusReason;
	/**
	 * @access public
	 * @var integer
	 */
	public $TotalCount;
	/**
	 * @access public
	 * @var znsID
	 */
	public $UpdatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $UpdatedDate;
}}

if (!class_exists("CreditBalanceAdjustment")) {
/**
 * CreditBalanceAdjustment
 */
class CreditBalanceAdjustment extends zObject {
	/**
	 * @access public
	 * @var znsID
	 */
	public $AccountId;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $AdjustmentDate;
	/**
	 * @access public
	 * @var double
	 */
	public $Amount;
	/**
	 * @access public
	 * @var string
	 */
	public $Comment;
	/**
	 * @access public
	 * @var znsID
	 */
	public $CreatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $CreatedDate;
	/**
	 * @access public
	 * @var string
	 */
	public $Number;
	/**
	 * @access public
	 * @var string
	 */
	public $ReferenceId;
	/**
	 * @access public
	 * @var string
	 */
	public $SourceTransactionId;
	/**
	 * @access public
	 * @var string
	 */
	public $SourceTransactionNumber;
	/**
	 * @access public
	 * @var string
	 */
	public $SourceTransactionType;
	/**
	 * @access public
	 * @var string
	 */
	public $Status;
	/**
	 * @access public
	 * @var string
	 */
	public $TransferredToAccounting;
	/**
	 * @access public
	 * @var string
	 */
	public $Type;
	/**
	 * @access public
	 * @var znsID
	 */
	public $UpdatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $UpdatedDate;
}}

if (!class_exists("Export")) {
/**
 * Export
 */
class Export extends zObject {
	/**
	 * @access public
	 * @var znsID
	 */
	public $CreatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $CreatedDate;
	/**
	 * @access public
	 * @var boolean
	 */
	public $Encrypted;
	/**
	 * @access public
	 * @var znsID
	 */
	public $FileId;
	/**
	 * @access public
	 * @var string
	 */
	public $Format;
	/**
	 * @access public
	 * @var string
	 */
	public $Name;
	/**
	 * @access public
	 * @var string
	 */
	public $Query;
	/**
	 * @access public
	 * @var integer
	 */
	public $Size;
	/**
	 * @access public
	 * @var string
	 */
	public $Status;
	/**
	 * @access public
	 * @var string
	 */
	public $StatusReason;
	/**
	 * @access public
	 * @var znsID
	 */
	public $UpdatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $UpdatedDate;
	/**
	 * @access public
	 * @var boolean
	 */
	public $Zip;
}}

if (!class_exists("CommunicationProfile")) {
/**
 * CommunicationProfile
 */
class CommunicationProfile extends zObject {
	/**
	 * @access public
	 * @var znsID
	 */
	public $CreatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $CreatedDate;
	/**
	 * @access public
	 * @var string
	 */
	public $Description;
	/**
	 * @access public
	 * @var string
	 */
	public $ProfileName;
	/**
	 * @access public
	 * @var znsID
	 */
	public $UpdatedById;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $UpdatedDate;
}}

if (!class_exists("ID")) {
/**
 * ID
 */
class ID {
}}

if (!class_exists("LoginResult")) {
/**
 * LoginResult
 */
class LoginResult {
	/**
	 * @access public
	 * @var string
	 */
	public $Session;
	/**
	 * @access public
	 * @var string
	 */
	public $ServerUrl;
}}

if (!class_exists("SubscribeRequest")) {
/**
 * SubscribeRequest
 */
class SubscribeRequest {
	/**
	 * @access public
	 * @var Account
	 */
	public $Account;
	/**
	 * @access public
	 * @var PaymentMethod
	 */
	public $PaymentMethod;
	/**
	 * @access public
	 * @var Contact
	 */
	public $BillToContact;
	/**
	 * @access public
	 * @var PreviewOptions
	 */
	public $PreviewOptions;
	/**
	 * @access public
	 * @var Contact
	 */
	public $SoldToContact;
	/**
	 * @access public
	 * @var SubscribeOptions
	 */
	public $SubscribeOptions;
	/**
	 * @access public
	 * @var SubscriptionData
	 */
	public $SubscriptionData;
}}

if (!class_exists("SubscribeOptions")) {
/**
 * SubscribeOptions
 */
class SubscribeOptions {
	/**
	 * @access public
	 * @var boolean
	 */
	public $GenerateInvoice;
	/**
	 * @access public
	 * @var boolean
	 */
	public $ProcessPayments;
	/**
	 * @access public
	 * @var SubscribeInvoiceProcessingOptions
	 */
	public $SubscribeInvoiceProcessingOptions;
}}

if (!class_exists("SubscribeInvoiceProcessingOptions")) {
/**
 * SubscribeInvoiceProcessingOptions
 */
class SubscribeInvoiceProcessingOptions {
	/**
	 * @access public
	 * @var string
	 */
	public $InvoiceProcessingScope;
}}

if (!class_exists("SubscriptionData")) {
/**
 * SubscriptionData
 */
class SubscriptionData {
	/**
	 * @access public
	 * @var Subscription
	 */
	public $Subscription;
	/**
	 * @access public
	 * @var RatePlanData[]
	 */
	public $RatePlanData;
}}

if (!class_exists("RatePlanData")) {
/**
 * RatePlanData
 */
class RatePlanData {
	/**
	 * @access public
	 * @var RatePlan
	 */
	public $RatePlan;
	/**
	 * @access public
	 * @var RatePlanChargeData[]
	 */
	public $RatePlanChargeData;
}}

if (!class_exists("RatePlanChargeData")) {
/**
 * RatePlanChargeData
 */
class RatePlanChargeData {
	/**
	 * @access public
	 * @var RatePlanCharge
	 */
	public $RatePlanCharge;
	/**
	 * @access public
	 * @var RatePlanChargeTier[]
	 */
	public $RatePlanChargeTier;
}}

if (!class_exists("ProductRatePlanChargeTierData")) {
/**
 * ProductRatePlanChargeTierData
 */
class ProductRatePlanChargeTierData {
	/**
	 * @access public
	 * @var ProductRatePlanChargeTier[]
	 */
	public $ProductRatePlanChargeTier;
}}

if (!class_exists("GatewayOptionData")) {
/**
 * GatewayOptionData
 */
class GatewayOptionData {
	/**
	 * @access public
	 * @var GatewayOption
	 */
	public $GatewayOption;
}}

if (!class_exists("InvoiceData")) {
/**
 * InvoiceData
 */
class InvoiceData {
	/**
	 * @access public
	 * @var Invoice
	 */
	public $Invoice;
	/**
	 * @access public
	 * @var InvoiceItem[]
	 */
	public $InvoiceItem;
}}

if (!class_exists("InvoiceResult")) {
/**
 * InvoiceResult
 */
class InvoiceResult {
	/**
	 * @access public
	 * @var Invoice[]
	 */
	public $Invoice;
}}

if (!class_exists("PreviewOptions")) {
/**
 * PreviewOptions
 */
class PreviewOptions {
	/**
	 * @access public
	 * @var boolean
	 */
	public $EnablePreviewMode;
	/**
	 * @access public
	 * @var integer
	 */
	public $NumberOfPeriods;
}}

if (!class_exists("SubscribeResult")) {
/**
 * SubscribeResult
 */
class SubscribeResult {
	/**
	 * @access public
	 * @var znsID
	 */
	public $AccountId;
	/**
	 * @access public
	 * @var string
	 */
	public $AccountNumber;
	/**
	 * @access public
	 * @var Error[]
	 */
	public $Errors;
	/**
	 * @access public
	 * @var InvoiceData[]
	 */
	public $InvoiceData;
	/**
	 * @access public
	 * @var znsID
	 */
	public $InvoiceId;
	/**
	 * @access public
	 * @var string
	 */
	public $InvoiceNumber;
	/**
	 * @access public
	 * @var InvoiceResult
	 */
	public $InvoiceResult;
	/**
	 * @access public
	 * @var string
	 */
	public $PaymentTransactionNumber;
	/**
	 * @access public
	 * @var znsID
	 */
	public $SubscriptionId;
	/**
	 * @access public
	 * @var string
	 */
	public $SubscriptionNumber;
	/**
	 * @access public
	 * @var boolean
	 */
	public $Success;
}}

if (!class_exists("SaveResult")) {
/**
 * SaveResult
 */
class SaveResult {
	/**
	 * @access public
	 * @var Error[]
	 */
	public $Errors;
	/**
	 * @access public
	 * @var znsID
	 */
	public $Id;
	/**
	 * @access public
	 * @var boolean
	 */
	public $Success;
}}

if (!class_exists("DeleteResult")) {
/**
 * DeleteResult
 */
class DeleteResult {
	/**
	 * @access public
	 * @var Error[]
	 */
	public $errors;
	/**
	 * @access public
	 * @var znsID
	 */
	public $id;
	/**
	 * @access public
	 * @var boolean
	 */
	public $success;
}}

if (!class_exists("ExecuteResult")) {
/**
 * ExecuteResult
 */
class ExecuteResult {
	/**
	 * @access public
	 * @var Error[]
	 */
	public $Errors;
	/**
	 * @access public
	 * @var znsID
	 */
	public $Id;
	/**
	 * @access public
	 * @var boolean
	 */
	public $Success;
}}

if (!class_exists("QueryLocator")) {
/**
 * QueryLocator
 */
class QueryLocator {
}}

if (!class_exists("QueryResult")) {
/**
 * QueryResult
 */
class QueryResult {
	/**
	 * @access public
	 * @var boolean
	 */
	public $done;
	/**
	 * @access public
	 * @var znsQueryLocator
	 */
	public $queryLocator;
	/**
	 * @access public
	 * @var zObject[]
	 */
	public $records;
	/**
	 * @access public
	 * @var integer
	 */
	public $size;
}}

if (!class_exists("Error")) {
/**
 * Error
 */
class Error {
	/**
	 * @access public
	 * @var znsErrorCode
	 */
	public $Code;
	/**
	 * @access public
	 * @var string
	 */
	public $Message;
	/**
	 * @access public
	 * @var string
	 */
	public $Field;
}}

if (!class_exists("ErrorCode")) {
/**
 * ErrorCode
 */
class ErrorCode {
}}

if (!class_exists("login")) {
/**
 * login
 */
class login {
	/**
	 * @access public
	 * @var string
	 */
	public $username;
	/**
	 * @access public
	 * @var string
	 */
	public $password;
}}

if (!class_exists("loginResponse")) {
/**
 * loginResponse
 */
class loginResponse {
	/**
	 * @access public
	 * @var LoginResult
	 */
	public $result;
}}

if (!class_exists("subscribe")) {
/**
 * subscribe
 */
class subscribe {
	/**
	 * @access public
	 * @var SubscribeRequest[]
	 */
	public $subscribes;
}}

if (!class_exists("subscribeResponse")) {
/**
 * subscribeResponse
 */
class subscribeResponse {
	/**
	 * @access public
	 * @var SubscribeResult[]
	 */
	public $result;
}}

if (!class_exists("create")) {
/**
 * create
 */
class create {
	/**
	 * @access public
	 * @var zObject[]
	 */
	public $zObjects;
}}

if (!class_exists("createResponse")) {
/**
 * createResponse
 */
class createResponse {
	/**
	 * @access public
	 * @var SaveResult[]
	 */
	public $result;
}}

if (!class_exists("generate")) {
/**
 * generate
 */
class generate {
	/**
	 * @access public
	 * @var zObject[]
	 */
	public $zObjects;
}}

if (!class_exists("generateResponse")) {
/**
 * generateResponse
 */
class generateResponse {
	/**
	 * @access public
	 * @var SaveResult[]
	 */
	public $result;
}}

if (!class_exists("update")) {
/**
 * update
 */
class update {
	/**
	 * @access public
	 * @var zObject[]
	 */
	public $zObjects;
}}

if (!class_exists("updateResponse")) {
/**
 * updateResponse
 */
class updateResponse {
	/**
	 * @access public
	 * @var SaveResult[]
	 */
	public $result;
}}

if (!class_exists("delete")) {
/**
 * delete
 */
class delete {
	/**
	 * @access public
	 * @var string
	 */
	public $type;
	/**
	 * @access public
	 * @var znsID[]
	 */
	public $ids;
}}

if (!class_exists("deleteResponse")) {
/**
 * deleteResponse
 */
class deleteResponse {
	/**
	 * @access public
	 * @var DeleteResult[]
	 */
	public $result;
}}

if (!class_exists("execute")) {
/**
 * execute
 */
class execute {
	/**
	 * @access public
	 * @var string
	 */
	public $type;
	/**
	 * @access public
	 * @var boolean
	 */
	public $synchronous;
	/**
	 * @access public
	 * @var znsID[]
	 */
	public $ids;
}}

if (!class_exists("executeResponse")) {
/**
 * executeResponse
 */
class executeResponse {
	/**
	 * @access public
	 * @var ExecuteResult[]
	 */
	public $result;
}}

if (!class_exists("query")) {
/**
 * query
 */
class query {
	/**
	 * @access public
	 * @var string
	 */
	public $queryString;
}}

if (!class_exists("queryResponse")) {
/**
 * queryResponse
 */
class queryResponse {
	/**
	 * @access public
	 * @var QueryResult
	 */
	public $result;
}}

if (!class_exists("SessionHeader")) {
/**
 * SessionHeader
 */
class SessionHeader {
	/**
	 * @access public
	 * @var string
	 */
	public $session;
}}

if (!class_exists("getUserInfoResponse")) {
/**
 * getUserInfoResponse
 */
class getUserInfoResponse {
	/**
	 * @access public
	 * @var string
	 */
	public $TenantId;
	/**
	 * @access public
	 * @var string
	 */
	public $TenantName;
	/**
	 * @access public
	 * @var string
	 */
	public $UserEmail;
	/**
	 * @access public
	 * @var string
	 */
	public $UserFullName;
	/**
	 * @access public
	 * @var string
	 */
	public $UserId;
	/**
	 * @access public
	 * @var string
	 */
	public $Username;
}}

if (!class_exists("getUserInfo")) {
/**
 * getUserInfo
 */
class getUserInfo {
}}

if (!class_exists("DummyHeader")) {
/**
 * DummyHeader
 */
class DummyHeader {
	/**
	 * @access public
	 * @var Account
	 */
	public $Account;
	/**
	 * @access public
	 * @var InvoiceAdjustment
	 */
	public $InvoiceAdjustment;
	/**
	 * @access public
	 * @var Amendment
	 */
	public $Amendment;
	/**
	 * @access public
	 * @var Invoice
	 */
	public $Invoice;
	/**
	 * @access public
	 * @var InvoiceItem
	 */
	public $InvoiceItem;
	/**
	 * @access public
	 * @var InvoicePayment
	 */
	public $InvoicePayment;
	/**
	 * @access public
	 * @var Import
	 */
	public $Import;
	/**
	 * @access public
	 * @var Payment
	 */
	public $Payment;
	/**
	 * @access public
	 * @var Product
	 */
	public $Product;
	/**
	 * @access public
	 * @var ProductRatePlan
	 */
	public $ProductRatePlan;
	/**
	 * @access public
	 * @var ProductRatePlanCharge
	 */
	public $ProductRatePlanCharge;
	/**
	 * @access public
	 * @var ProductRatePlanChargeTier
	 */
	public $ProductRatePlanChargeTier;
	/**
	 * @access public
	 * @var RatePlan
	 */
	public $RatePlan;
	/**
	 * @access public
	 * @var RatePlanCharge
	 */
	public $RatePlanCharge;
	/**
	 * @access public
	 * @var RatePlanChargeTier
	 */
	public $RatePlanChargeTier;
	/**
	 * @access public
	 * @var Usage
	 */
	public $Usage;
	/**
	 * @access public
	 * @var Refund
	 */
	public $Refund;
	/**
	 * @access public
	 * @var RefundInvoicePayment
	 */
	public $RefundInvoicePayment;
	/**
	 * @access public
	 * @var CreditBalanceAdjustment
	 */
	public $CreditBalanceAdjustment;
	/**
	 * @access public
	 * @var Export
	 */
	public $Export;
	/**
	 * @access public
	 * @var InvoiceItemAdjustment
	 */
	public $InvoiceItemAdjustment;
	/**
	 * @access public
	 * @var CommunicationProfile
	 */
	public $CommunicationProfile;
}}

if (!class_exists("CallOptions")) {
/**
 * CallOptions
 */
class CallOptions {
	/**
	 * @access public
	 * @var boolean
	 */
	public $useSingleTransaction;
}}

if (!class_exists("InvoiceProcessingOptions")) {
/**
 * InvoiceProcessingOptions
 */
class InvoiceProcessingOptions {
	/**
	 * @access public
	 * @var dateTime
	 */
	public $InvoiceTargetDate;
}}

if (!class_exists("AmendOptions")) {
/**
 * AmendOptions
 */
class AmendOptions {
	/**
	 * @access public
	 * @var boolean
	 */
	public $GenerateInvoice;
	/**
	 * @access public
	 * @var InvoiceProcessingOptions
	 */
	public $InvoiceProcessingOptions;
	/**
	 * @access public
	 * @var boolean
	 */
	public $ProcessPayments;
}}

if (!class_exists("AmendRequest")) {
/**
 * AmendRequest
 */
class AmendRequest {
	/**
	 * @access public
	 * @var Amendment[]
	 */
	public $Amendments;
	/**
	 * @access public
	 * @var AmendOptions
	 */
	public $AmendOptions;
	/**
	 * @access public
	 * @var PreviewOptions
	 */
	public $PreviewOptions;
}}

if (!class_exists("amend")) {
/**
 * amend
 */
class amend {
	/**
	 * @access public
	 * @var AmendRequest[]
	 */
	public $requests;
}}

if (!class_exists("AmendResult")) {
/**
 * AmendResult
 */
class AmendResult {
	/**
	 * @access public
	 * @var znsID[]
	 */
	public $AmendmentIds;
	/**
	 * @access public
	 * @var Error[]
	 */
	public $Errors;
	/**
	 * @access public
	 * @var InvoiceData[]
	 */
	public $InvoiceDatas;
	/**
	 * @access public
	 * @var znsID
	 */
	public $InvoiceId;
	/**
	 * @access public
	 * @var string
	 */
	public $PaymentTransactionNumber;
	/**
	 * @access public
	 * @var boolean
	 */
	public $Success;
}}

if (!class_exists("amendResponse")) {
/**
 * amendResponse
 */
class amendResponse {
	/**
	 * @access public
	 * @var AmendResult[]
	 */
	public $results;
}}

if (!class_exists("ApiFault")) {
/**
 * ApiFault
 */
class ApiFault {
	/**
	 * @access public
	 * @var znsErrorCode
	 */
	public $FaultCode;
	/**
	 * @access public
	 * @var string
	 */
	public $FaultMessage;
}}

if (!class_exists("LoginFault")) {
/**
 * LoginFault
 */
class LoginFault extends ApiFault {
}}

if (!class_exists("InvalidTypeFault")) {
/**
 * InvalidTypeFault
 */
class InvalidTypeFault extends ApiFault {
}}

if (!class_exists("InvalidValueFault")) {
/**
 * InvalidValueFault
 */
class InvalidValueFault extends ApiFault {
}}

if (!class_exists("MalformedQueryFault")) {
/**
 * MalformedQueryFault
 */
class MalformedQueryFault extends ApiFault {
}}

if (!class_exists("InvalidQueryLocatorFault")) {
/**
 * InvalidQueryLocatorFault
 */
class InvalidQueryLocatorFault extends ApiFault {
}}

if (!class_exists("UnexpectedErrorFault")) {
/**
 * UnexpectedErrorFault
 */
class UnexpectedErrorFault extends ApiFault {
}}

if (!class_exists("ZuoraService")) {
/**
 * ZuoraService
 * @author WSDLInterpreter
 */
class ZuoraService extends SoapClient {
	/**
	 * Default class map for wsdl=>php
	 * @access private
	 * @var array
	 */
	private static $classmap = array(
		"zObject" => "zObject",
		"Account" => "Account",
		"InvoiceAdjustment" => "InvoiceAdjustment",
		"InvoiceItemAdjustment" => "InvoiceItemAdjustment",
		"Amendment" => "Amendment",
		"Contact" => "Contact",
		"Invoice" => "Invoice",
		"Refund" => "Refund",
		"RefundInvoicePayment" => "RefundInvoicePayment",
		"RefundTransactionLog" => "RefundTransactionLog",
		"InvoiceItem" => "InvoiceItem",
		"InvoicePayment" => "InvoicePayment",
		"Payment" => "Payment",
		"PaymentTransactionLog" => "PaymentTransactionLog",
		"PaymentMethod" => "PaymentMethod",
		"Product" => "Product",
		"ProductRatePlan" => "ProductRatePlan",
		"ProductRatePlanCharge" => "ProductRatePlanCharge",
		"ProductRatePlanChargeTier" => "ProductRatePlanChargeTier",
		"GatewayOption" => "GatewayOption",
		"RatePlan" => "RatePlan",
		"RatePlanCharge" => "RatePlanCharge",
		"RatePlanChargeTier" => "RatePlanChargeTier",
		"Subscription" => "Subscription",
		"Usage" => "Usage",
		"Import" => "Import",
		"CreditBalanceAdjustment" => "CreditBalanceAdjustment",
		"Export" => "Export",
		"CommunicationProfile" => "CommunicationProfile",
		"ID" => "ID",
		"LoginResult" => "LoginResult",
		"SubscribeRequest" => "SubscribeRequest",
		"SubscribeOptions" => "SubscribeOptions",
		"SubscribeInvoiceProcessingOptions" => "SubscribeInvoiceProcessingOptions",
		"SubscriptionData" => "SubscriptionData",
		"RatePlanData" => "RatePlanData",
		"RatePlanChargeData" => "RatePlanChargeData",
		"ProductRatePlanChargeTierData" => "ProductRatePlanChargeTierData",
		"GatewayOptionData" => "GatewayOptionData",
		"InvoiceData" => "InvoiceData",
		"InvoiceResult" => "InvoiceResult",
		"PreviewOptions" => "PreviewOptions",
		"SubscribeResult" => "SubscribeResult",
		"SaveResult" => "SaveResult",
		"DeleteResult" => "DeleteResult",
		"ExecuteResult" => "ExecuteResult",
		"QueryLocator" => "QueryLocator",
		"QueryResult" => "QueryResult",
		"Error" => "Error",
		"ErrorCode" => "ErrorCode",
		"login" => "login",
		"loginResponse" => "loginResponse",
		"subscribe" => "subscribe",
		"subscribeResponse" => "subscribeResponse",
		"create" => "create",
		"createResponse" => "createResponse",
		"generate" => "generate",
		"generateResponse" => "generateResponse",
		"update" => "update",
		"updateResponse" => "updateResponse",
		"delete" => "delete",
		"deleteResponse" => "deleteResponse",
		"execute" => "execute",
		"executeResponse" => "executeResponse",
		"query" => "query",
		"queryResponse" => "queryResponse",
		"SessionHeader" => "SessionHeader",
		"getUserInfoResponse" => "getUserInfoResponse",
		"getUserInfo" => "getUserInfo",
		"DummyHeader" => "DummyHeader",
		"CallOptions" => "CallOptions",
		"InvoiceProcessingOptions" => "InvoiceProcessingOptions",
		"AmendOptions" => "AmendOptions",
		"AmendRequest" => "AmendRequest",
		"amend" => "amend",
		"AmendResult" => "AmendResult",
		"amendResponse" => "amendResponse",
		"ApiFault" => "ApiFault",
		"LoginFault" => "LoginFault",
		"InvalidTypeFault" => "InvalidTypeFault",
		"InvalidValueFault" => "InvalidValueFault",
		"MalformedQueryFault" => "MalformedQueryFault",
		"InvalidQueryLocatorFault" => "InvalidQueryLocatorFault",
		"UnexpectedErrorFault" => "UnexpectedErrorFault",
	);

	/**
	 * Constructor using wsdl location and options array
	 * @param string $wsdl WSDL location for this service
	 * @param array $options Options for the SoapClient
	 */
	public function __construct($wsdl="zuora.a.39.0.wsdl.xml", $options=array()) {
		foreach(self::$classmap as $wsdlClassName => $phpClassName) {
		    if(!isset($options['classmap'][$wsdlClassName])) {
		        $options['classmap'][$wsdlClassName] = $phpClassName;
		    }
		}
		parent::__construct($wsdl, $options);
	}

	/**
	 * Checks if an argument list matches against a valid argument type list
	 * @param array $arguments The argument list to check
	 * @param array $validParameters A list of valid argument types
	 * @return boolean true if arguments match against validParameters
	 * @throws Exception invalid function signature message
	 */
	public function _checkArguments($arguments, $validParameters) {
		$variables = "";
		foreach ($arguments as $arg) {
		    $type = gettype($arg);
		    if ($type == "object") {
		        $type = get_class($arg);
		    }
		    $variables .= "(".$type.")";
		}
		if (!in_array($variables, $validParameters)) {
		    throw new Exception("Invalid parameter types: ".str_replace(")(", ", ", $variables));
		}
		return true;
	}

	/**
	 * Service Call: login
	 * Parameter options:
	 * (login) parameters
	 * @param mixed,... See function description for parameter options
	 * @return loginResponse
	 * @throws Exception invalid function signature message
	 */
	public function login($mixed = null) {
		$validParameters = array(
			"(login)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("login", $args);
	}


	/**
	 * Service Call: subscribe
	 * Parameter options:
	 * (subscribe) parameters
	 * @param mixed,... See function description for parameter options
	 * @return subscribeResponse
	 * @throws Exception invalid function signature message
	 */
	public function subscribe($mixed = null) {
		$validParameters = array(
			"(subscribe)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("subscribe", $args);
	}


	/**
	 * Service Call: create
	 * Parameter options:
	 * (create) parameters
	 * @param mixed,... See function description for parameter options
	 * @return createResponse
	 * @throws Exception invalid function signature message
	 */
	public function create($mixed = null) {
		$validParameters = array(
			"(create)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("create", $args);
	}


	/**
	 * Service Call: generate
	 * Parameter options:
	 * (generate) parameters
	 * @param mixed,... See function description for parameter options
	 * @return generateResponse
	 * @throws Exception invalid function signature message
	 */
	public function generate($mixed = null) {
		$validParameters = array(
			"(generate)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("generate", $args);
	}


	/**
	 * Service Call: update
	 * Parameter options:
	 * (update) parameters
	 * @param mixed,... See function description for parameter options
	 * @return updateResponse
	 * @throws Exception invalid function signature message
	 */
	public function update($mixed = null) {
		$validParameters = array(
			"(update)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("update", $args);
	}


	/**
	 * Service Call: delete
	 * Parameter options:
	 * (delete) parameters
	 * @param mixed,... See function description for parameter options
	 * @return deleteResponse
	 * @throws Exception invalid function signature message
	 */
	public function delete($mixed = null) {
		$validParameters = array(
			"(delete)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("delete", $args);
	}


	/**
	 * Service Call: execute
	 * Parameter options:
	 * (execute) parameters
	 * @param mixed,... See function description for parameter options
	 * @return executeResponse
	 * @throws Exception invalid function signature message
	 */
	public function execute($mixed = null) {
		$validParameters = array(
			"(execute)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("execute", $args);
	}


	/**
	 * Service Call: query
	 * Parameter options:
	 * (query) parameters
	 * @param mixed,... See function description for parameter options
	 * @return queryResponse
	 * @throws Exception invalid function signature message
	 */
	public function query($mixed = null) {
		$validParameters = array(
			"(query)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("query", $args);
	}


	/**
	 * Service Call: getUserInfo
	 * Parameter options:
	 * (getUserInfo) getUserInfo
	 * @param mixed,... See function description for parameter options
	 * @return getUserInfoResponse
	 * @throws Exception invalid function signature message
	 */
	public function getUserInfo($mixed = null) {
		$validParameters = array(
			"(getUserInfo)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("getUserInfo", $args);
	}


	/**
	 * Service Call: amend
	 * Parameter options:
	 * (amend) parameters
	 * @param mixed,... See function description for parameter options
	 * @return amendResponse
	 * @throws Exception invalid function signature message
	 */
	public function amend($mixed = null) {
		$validParameters = array(
			"(amend)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("amend", $args);
	}


}}

?>