<?php

namespace OxidProfessionalServices\PayPal\Api\Model\Orders;

/**
 * Information needed to pay using Sofort.
 */
class SofortRequest implements \JsonSerializable
{
	/** @var string */
	public $name;

	/** @var string */
	public $country_code;

	/** @var string */
	public $bic;


	public function jsonSerialize()
	{
		return array_filter((array) $this);
	}
}
