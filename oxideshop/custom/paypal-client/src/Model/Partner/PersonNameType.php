<?php

namespace OxidProfessionalServices\PayPal\Api\Model\Partner;

/**
 * The person's name type.
 */
class PersonNameType implements \JsonSerializable
{
	public function jsonSerialize()
	{
		return array_filter((array) $this);
	}
}
