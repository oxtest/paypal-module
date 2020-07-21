<?php

namespace OxidProfessionalServices\PayPal\Api\Model\Subscriptions;

/**
 * The card network or brand. Applies to credit, debit, gift, and payment cards.
 */
class CardBrand implements \JsonSerializable
{
	public function jsonSerialize()
	{
		return array_filter((array) $this);
	}
}
