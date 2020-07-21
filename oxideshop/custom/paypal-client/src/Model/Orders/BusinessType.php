<?php

namespace OxidProfessionalServices\PayPal\Api\Model\Orders;

/**
 * The business types classified.
 */
class BusinessType implements \JsonSerializable
{
	public function jsonSerialize()
	{
		return array_filter((array) $this);
	}
}
