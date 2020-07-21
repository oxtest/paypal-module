<?php

namespace OxidProfessionalServices\PayPal\Api\Model\Disputes;

/**
 * The customer-entered issue details for an unauthorized dispute.
 */
class UnauthorizedDisputeProperties implements \JsonSerializable
{
	/** @var boolean */
	public $password_changed;

	/** @var boolean */
	public $pin_changed;

	/** @var boolean */
	public $security_questions_changed;

	/** @var string */
	public $review_sla;

	/** @var array */
	public $rejected_dispute_transactions;


	public function jsonSerialize()
	{
		return array_filter((array) $this);
	}
}
