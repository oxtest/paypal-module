<?php

namespace OxidProfessionalServices\PayPal\Api\Model\Disputes;

/**
 * Policy that determines whether the fee needs to be retained or returned while moving the money as part of dispute process.
 */
class FeePolicy implements \JsonSerializable
{
	/** @var string */
	public $transaction_fee;


	public function jsonSerialize()
	{
		return array_filter((array) $this);
	}
}
