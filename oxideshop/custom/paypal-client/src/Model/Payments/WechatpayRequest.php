<?php

namespace OxidProfessionalServices\PayPal\Api\Model\Payments;

/**
 * Information needed to pay using WeChat Pay.
 */
class WechatpayRequest implements \JsonSerializable
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
