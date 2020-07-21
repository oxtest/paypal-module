<?php

namespace OxidProfessionalServices\PayPal\Api\Model\Payments;

/**
 * Information needed to pay using PayU.
 */
class PayuRequest implements \JsonSerializable
{
	/** @var string */
	public $name;

	/** @var string */
	public $email;

	/** @var string */
	public $country_code;


	public function jsonSerialize()
	{
		return array_filter((array) $this);
	}
}
