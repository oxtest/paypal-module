<?php

namespace OxidProfessionalServices\PayPal\Api\Model\Partner;

/**
 * The phone type.
 */
class PhoneType implements \JsonSerializable
{
	public function jsonSerialize()
	{
		return array_filter((array) $this);
	}
}
