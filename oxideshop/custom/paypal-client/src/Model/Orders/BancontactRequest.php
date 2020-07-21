<?php

namespace OxidProfessionalServices\PayPal\Api\Model\Orders;

/**
 * Information needed to pay using Bancontact.
 */
class BancontactRequest implements \JsonSerializable
{
	/** @var string */
	public $name;

	/** @var string */
	public $country_code;


	public function jsonSerialize()
	{
		return array_filter((array) $this);
	}
}
