<?php

namespace OxidProfessionalServices\PayPal\Api\Model\Disputes;

/**
 * The eligible and ineligible disputes with reasons.
 */
class DisputeEligibility
{
	/** @var string */
	public $seller_transaction_id;

	/** @var string */
	public $buyer_transaction_id;

	/** @var array */
	public $eligible_dispute_reasons;

	/** @var array */
	public $ineligible_dispute_reasons;

	/** @var string */
	public $recommended_dispute_reason;
}