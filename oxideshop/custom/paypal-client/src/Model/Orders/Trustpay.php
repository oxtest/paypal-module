<?php

namespace OxidProfessionalServices\PayPal\Api\Model\Orders;

/**
 * Information used to pay using TrustPay.
 */
class Trustpay
{
	/** @var OxidProfessionalServices\PayPal\Api\Model\Orders\FullName */
	public $name;

	/** @var OxidProfessionalServices\PayPal\Api\Model\Orders\CountryCode */
	public $country_code;
}