<?php

namespace OxidProfessionalServices\PayPal\Api\Model\Subscriptions;

/**
 * The payment card used to fund the payment. Card can be a credit or debit card.
 */
class CardResponseWithBillingAddress extends \CardResponse
{
	/** @var string */
	public $name;

	/** @var AddressPortable */
	public $billing_address;
}