<?php

namespace OxidProfessionalServices\PayPal\Api\Model\Disputes;

use JsonSerializable;
use OxidProfessionalServices\PayPal\Api\Model\BaseModel;

/**
 * A merchant- or customer-submitted evidence document.
 *
 * generated from: response-evidence.json
 */
class Evidence implements JsonSerializable
{
    use BaseModel;

    /** Proof of fulfillment should be a copy of the actual shipping label on the package that shows the destination address and the shipping company's stamp to verify the shipment date. */
    const EVIDENCE_TYPE_PROOF_OF_FULFILLMENT = 'PROOF_OF_FULFILLMENT';

    /** Proof of refund issued to the buyer */
    const EVIDENCE_TYPE_PROOF_OF_REFUND = 'PROOF_OF_REFUND';

    /** Proof of delivery signature. */
    const EVIDENCE_TYPE_PROOF_OF_DELIVERY_SIGNATURE = 'PROOF_OF_DELIVERY_SIGNATURE';

    /** Copy of original receipt or invoice. */
    const EVIDENCE_TYPE_PROOF_OF_RECEIPT_COPY = 'PROOF_OF_RECEIPT_COPY';

    /** Copy of terms and conditions,contract or store return policy */
    const EVIDENCE_TYPE_RETURN_POLICY = 'RETURN_POLICY';

    /** Copy of billing agreement. */
    const EVIDENCE_TYPE_BILLING_AGREEMENT = 'BILLING_AGREEMENT';

    /** Proof of reshipment should be a copy of the actual shipping label on the package that shows the destination address and the shipping company's stamp to verify the reshipment date. */
    const EVIDENCE_TYPE_PROOF_OF_RESHIPMENT = 'PROOF_OF_RESHIPMENT';

    /** A copy of the original description of the item or service */
    const EVIDENCE_TYPE_ITEM_DESCRIPTION = 'ITEM_DESCRIPTION';

    /** Copy of the police report filed. */
    const EVIDENCE_TYPE_POLICE_REPORT = 'POLICE_REPORT';

    /** More information has to be provided about the claim using the affidavit. */
    const EVIDENCE_TYPE_AFFIDAVIT = 'AFFIDAVIT';

    /** Document showing item/service was paid by another payment method. */
    const EVIDENCE_TYPE_PAID_WITH_OTHER_METHOD = 'PAID_WITH_OTHER_METHOD';

    /** Copy of contract if applicable. */
    const EVIDENCE_TYPE_COPY_OF_CONTRACT = 'COPY_OF_CONTRACT';

    /** Copy of terminal/ATM receipt. */
    const EVIDENCE_TYPE_TERMINAL_ATM_RECEIPT = 'TERMINAL_ATM_RECEIPT';

    /** Explanation of what the price difference is related to (increased tip amount, shipping charges, taxes, etc). */
    const EVIDENCE_TYPE_PRICE_DIFFERENCE_REASON = 'PRICE_DIFFERENCE_REASON';

    /** Source of expected conversion rate or fee. */
    const EVIDENCE_TYPE_SOURCE_CONVERSION_RATE = 'SOURCE_CONVERSION_RATE';

    /** Bank/Credit statement showing withdrawal transaction. */
    const EVIDENCE_TYPE_BANK_STATEMENT = 'BANK_STATEMENT';

    /** The credit due reason. */
    const EVIDENCE_TYPE_CREDIT_DUE_REASON = 'CREDIT_DUE_REASON';

    /** The request credit receipt. */
    const EVIDENCE_TYPE_REQUEST_CREDIT_RECEIPT = 'REQUEST_CREDIT_RECEIPT';

    /** Proof of shipment or postage that shows you returned this item to your seller and should be a copy of the actual shipping label used. */
    const EVIDENCE_TYPE_PROOF_OF_RETURN = 'PROOF_OF_RETURN';

    /** Additional evidence information during case creation. */
    const EVIDENCE_TYPE_CREATE = 'CREATE';

    /** The evidence related to the reason change. */
    const EVIDENCE_TYPE_CHANGE_REASON = 'CHANGE_REASON';

    /** Document should show that the seller issued a refund outside Paypal. */
    const EVIDENCE_TYPE_PROOF_OF_REFUND_OUTSIDE_PAYPAL = 'PROOF_OF_REFUND_OUTSIDE_PAYPAL';

    /** Check with buyer if item Delivered (seller provided Proof of Shipping) */
    const EVIDENCE_TYPE_RECEIPT_OF_MERCHANDISE = 'RECEIPT_OF_MERCHANDISE';

    /** Document confirming that the item has been confiscated. */
    const EVIDENCE_TYPE_CUSTOMS_DOCUMENT = 'CUSTOMS_DOCUMENT';

    /** Custom fees receipt paid by the buyer */
    const EVIDENCE_TYPE_CUSTOMS_FEE_RECEIPT = 'CUSTOMS_FEE_RECEIPT';

    /** Any resolution reached with the seller should be communicated to PayPal. */
    const EVIDENCE_TYPE_INFORMATION_ON_RESOLUTION = 'INFORMATION_ON_RESOLUTION';

    /** Any additional information of the item purchased. */
    const EVIDENCE_TYPE_ADDITIONAL_INFORMATION_OF_ITEM = 'ADDITIONAL_INFORMATION_OF_ITEM';

    /** Specific details of a purchase made under a particular transaction has to be given. */
    const EVIDENCE_TYPE_DETAILS_OF_PURCHASE = 'DETAILS_OF_PURCHASE';

    /** More information required on how the item was damaged or was significantly different from the item advertised. */
    const EVIDENCE_TYPE_PROOF_OF_SIGNIFICANT_DIFFERENCE = 'PROOF_OF_SIGNIFICANT_DIFFERENCE';

    /** Any screenshot or download/usage log showing that the software or service was unavailable or non-functional. */
    const EVIDENCE_TYPE_PROOF_OF_SOFTWARE_OR_SERVICE_NOT_AS_DESCRIBED = 'PROOF_OF_SOFTWARE_OR_SERVICE_NOT_AS_DESCRIBED';

    /** Documentation from a third party or organization that evaluated this item that confirms they confiscated it. */
    const EVIDENCE_TYPE_PROOF_OF_CONFISCATION = 'PROOF_OF_CONFISCATION';

    /** Documentation supporting the claim that the item is damaged. */
    const EVIDENCE_TYPE_PROOF_OF_DAMAGE = 'PROOF_OF_DAMAGE';

    /** Report filed with a law enforcement agency or government organization. Examples of such agencies are -  Internet Crime Complaint Center (www.ic3.gov), state Consumer Protection office, state police or a Federal law enforcement agency such as the FBI or Postal Inspection Service. */
    const EVIDENCE_TYPE_COPY_OF_LAW_ENFORCEMENT_AGENCY_REPORT = 'COPY_OF_LAW_ENFORCEMENT_AGENCY_REPORT';

    /** Additional proof of shipment  such as a packing list, detailed invoice, or shipping manifest to confirm that all items have been shipped. */
    const EVIDENCE_TYPE_ADDITIONAL_PROOF_OF_SHIPMENT = 'ADDITIONAL_PROOF_OF_SHIPMENT';

    /** Documentation from the carrier should confirm the reason why they refuse to ship the item in question and the extent of the original damage. */
    const EVIDENCE_TYPE_PROOF_OF_DENIAL_BY_CARRIER = 'PROOF_OF_DENIAL_BY_CARRIER';

    /** Proof should be provided by an unbiased third-party, such as a dealer, appraiser or another individual or organisation that's qualified in the area of the item in question (other than yourself), and detail the extent of the damage or clearly explain how the item received significantly differs from the item advertised. */
    const EVIDENCE_TYPE_THIRDPARTY_PROOF_FOR_DAMAGE_OR_SIGNIFICANT_DIFFERENCE = 'THIRDPARTY_PROOF_FOR_DAMAGE_OR_SIGNIFICANT_DIFFERENCE';

    /** The document you have provided doesn't support your claim that the item is Significantly Not as Described. Please provide a document to clearly show how the item received significantly differs from the item advertised. */
    const EVIDENCE_TYPE_VALID_SUPPORTING_DOCUMENT = 'VALID_SUPPORTING_DOCUMENT';

    /** The document you have provided is illegible, unclear, or too dark to read.  Please provide a document that is legible and clear to read. */
    const EVIDENCE_TYPE_LEGIBLE_SUPPORTING_DOCUMENT = 'LEGIBLE_SUPPORTING_DOCUMENT';

    /** Online tracking information for remaining items that have to be shipped to the seller. */
    const EVIDENCE_TYPE_RETURN_TRACKING_INFORMATION = 'RETURN_TRACKING_INFORMATION';

    /** Confirmation that the item has been received. */
    const EVIDENCE_TYPE_DELIVERY_RECEIPT = 'DELIVERY_RECEIPT';

    /** In-store receipt or online verification should clearly show that the buyer picked up the item. */
    const EVIDENCE_TYPE_PROOF_OF_INSTORE_RECEIPT = 'PROOF_OF_INSTORE_RECEIPT';

    /** Tracking information should include the carrier name,  online tracking number and the website where the shipment can be tracked. */
    const EVIDENCE_TYPE_ADDITIONAL_TRACKING_INFORMATION = 'ADDITIONAL_TRACKING_INFORMATION';

    /** Proof of shipment or postage should be a copy of the actual shipping label on the package that shows the destination address and the carrier's stamp to verify the shipment date. */
    const EVIDENCE_TYPE_PROOF_OF_SHIPMENT_POSTAGE = 'PROOF_OF_SHIPMENT_POSTAGE';

    /** Online tracking information to confirm delivery of item. */
    const EVIDENCE_TYPE_ONLINE_TRACKING_INFORMATION = 'ONLINE_TRACKING_INFORMATION';

    /** Proof should be an in-store refund receipt or company documentation that clearly shows a completed refund for the transaction. */
    const EVIDENCE_TYPE_PROOF_OF_INSTORE_REFUND = 'PROOF_OF_INSTORE_REFUND';

    /** Proof should be compelling evidence to prove that the item or service was as described  and was delivered to the buyer. */
    const EVIDENCE_TYPE_PROOF_FOR_SOFTWARE_OR_SERVICE_DELIVERED = 'PROOF_FOR_SOFTWARE_OR_SERVICE_DELIVERED';

    /** Return address is required for the buyer to ship  the merchandise back to the seller. */
    const EVIDENCE_TYPE_RETURN_ADDRESS_FOR_SHIPPING = 'RETURN_ADDRESS_FOR_SHIPPING';

    /** To validate a claim,  a copy of the eparcel manifest showing the buyer's address from Australia Post is required. */
    const EVIDENCE_TYPE_COPY_OF_THE_EPARCEL_MANIFEST = 'COPY_OF_THE_EPARCEL_MANIFEST';

    /** The shipping manifest must show the buyer's address and can be obtained from the carrier. */
    const EVIDENCE_TYPE_COPY_OF_SHIPPING_MANIFEST = 'COPY_OF_SHIPPING_MANIFEST';

    /** Appeal affidavit is needed to make an appeal for any case outcome. */
    const EVIDENCE_TYPE_APPEAL_AFFIDAVIT = 'APPEAL_AFFIDAVIT';

    /** Check with buyer if the replacement of the item sent by the seller was received */
    const EVIDENCE_TYPE_RECEIPT_OF_REPLACEMENT = 'RECEIPT_OF_REPLACEMENT';

    /** Need Copy of Drivers license. */
    const EVIDENCE_TYPE_COPY_OF_DRIVERS_LICENSE = 'COPY_OF_DRIVERS_LICENSE';

    /** Additional Details about how account was accessed/what was changed. */
    const EVIDENCE_TYPE_ACCOUNT_CHANGE_INFORMATION = 'ACCOUNT_CHANGE_INFORMATION';

    /** Address where item was supposed to be delivered. */
    const EVIDENCE_TYPE_DELIVERY_ADDRESS = 'DELIVERY_ADDRESS';

    /** Confirmation that item was received and issue resolved. */
    const EVIDENCE_TYPE_CONFIRMATION_OF_RESOLUTION = 'CONFIRMATION_OF_RESOLUTION';

    /** Copy of merchant's response when the resolution was attempted. */
    const EVIDENCE_TYPE_MERCHANT_RESPONSE = 'MERCHANT_RESPONSE';

    /** A Detailed description about the account or card level permission given to another person. */
    const EVIDENCE_TYPE_PERMISSION_DESCRIPTION = 'PERMISSION_DESCRIPTION';

    /** Details of the merchandise's current location. */
    const EVIDENCE_TYPE_STATUS_OF_MERCHANDISE = 'STATUS_OF_MERCHANDISE';

    /** Details of where and when the card was lost/stolen?. */
    const EVIDENCE_TYPE_LOST_CARD_DETAILS = 'LOST_CARD_DETAILS';

    /** Details of the last valid transaction made on the card. */
    const EVIDENCE_TYPE_LAST_VALID_TRANSACTION_DETAILS = 'LAST_VALID_TRANSACTION_DETAILS';

    /** Other. */
    const EVIDENCE_TYPE_OTHER = 'OTHER';

    /** PayPal requested evidence from the customer. */
    const SOURCE_REQUESTED_FROM_BUYER = 'REQUESTED_FROM_BUYER';

    /** PayPal requested evidence from the merchant. */
    const SOURCE_REQUESTED_FROM_SELLER = 'REQUESTED_FROM_SELLER';

    /** Evidence was submitted by the customer. */
    const SOURCE_SUBMITTED_BY_BUYER = 'SUBMITTED_BY_BUYER';

    /** Evidence was submitted by the merchant. */
    const SOURCE_SUBMITTED_BY_SELLER = 'SUBMITTED_BY_SELLER';

    /** Evidence was submitted by the partner. */
    const SOURCE_SUBMITTED_BY_PARTNER = 'SUBMITTED_BY_PARTNER';

    /**
     * @var string
     * The evidence type.
     *
     * use one of constants defined in this class to set the value:
     * @see EVIDENCE_TYPE_PROOF_OF_FULFILLMENT
     * @see EVIDENCE_TYPE_PROOF_OF_REFUND
     * @see EVIDENCE_TYPE_PROOF_OF_DELIVERY_SIGNATURE
     * @see EVIDENCE_TYPE_PROOF_OF_RECEIPT_COPY
     * @see EVIDENCE_TYPE_RETURN_POLICY
     * @see EVIDENCE_TYPE_BILLING_AGREEMENT
     * @see EVIDENCE_TYPE_PROOF_OF_RESHIPMENT
     * @see EVIDENCE_TYPE_ITEM_DESCRIPTION
     * @see EVIDENCE_TYPE_POLICE_REPORT
     * @see EVIDENCE_TYPE_AFFIDAVIT
     * @see EVIDENCE_TYPE_PAID_WITH_OTHER_METHOD
     * @see EVIDENCE_TYPE_COPY_OF_CONTRACT
     * @see EVIDENCE_TYPE_TERMINAL_ATM_RECEIPT
     * @see EVIDENCE_TYPE_PRICE_DIFFERENCE_REASON
     * @see EVIDENCE_TYPE_SOURCE_CONVERSION_RATE
     * @see EVIDENCE_TYPE_BANK_STATEMENT
     * @see EVIDENCE_TYPE_CREDIT_DUE_REASON
     * @see EVIDENCE_TYPE_REQUEST_CREDIT_RECEIPT
     * @see EVIDENCE_TYPE_PROOF_OF_RETURN
     * @see EVIDENCE_TYPE_CREATE
     * @see EVIDENCE_TYPE_CHANGE_REASON
     * @see EVIDENCE_TYPE_PROOF_OF_REFUND_OUTSIDE_PAYPAL
     * @see EVIDENCE_TYPE_RECEIPT_OF_MERCHANDISE
     * @see EVIDENCE_TYPE_CUSTOMS_DOCUMENT
     * @see EVIDENCE_TYPE_CUSTOMS_FEE_RECEIPT
     * @see EVIDENCE_TYPE_INFORMATION_ON_RESOLUTION
     * @see EVIDENCE_TYPE_ADDITIONAL_INFORMATION_OF_ITEM
     * @see EVIDENCE_TYPE_DETAILS_OF_PURCHASE
     * @see EVIDENCE_TYPE_PROOF_OF_SIGNIFICANT_DIFFERENCE
     * @see EVIDENCE_TYPE_PROOF_OF_SOFTWARE_OR_SERVICE_NOT_AS_DESCRIBED
     * @see EVIDENCE_TYPE_PROOF_OF_CONFISCATION
     * @see EVIDENCE_TYPE_PROOF_OF_DAMAGE
     * @see EVIDENCE_TYPE_COPY_OF_LAW_ENFORCEMENT_AGENCY_REPORT
     * @see EVIDENCE_TYPE_ADDITIONAL_PROOF_OF_SHIPMENT
     * @see EVIDENCE_TYPE_PROOF_OF_DENIAL_BY_CARRIER
     * @see EVIDENCE_TYPE_THIRDPARTY_PROOF_FOR_DAMAGE_OR_SIGNIFICANT_DIFFERENCE
     * @see EVIDENCE_TYPE_VALID_SUPPORTING_DOCUMENT
     * @see EVIDENCE_TYPE_LEGIBLE_SUPPORTING_DOCUMENT
     * @see EVIDENCE_TYPE_RETURN_TRACKING_INFORMATION
     * @see EVIDENCE_TYPE_DELIVERY_RECEIPT
     * @see EVIDENCE_TYPE_PROOF_OF_INSTORE_RECEIPT
     * @see EVIDENCE_TYPE_ADDITIONAL_TRACKING_INFORMATION
     * @see EVIDENCE_TYPE_PROOF_OF_SHIPMENT_POSTAGE
     * @see EVIDENCE_TYPE_ONLINE_TRACKING_INFORMATION
     * @see EVIDENCE_TYPE_PROOF_OF_INSTORE_REFUND
     * @see EVIDENCE_TYPE_PROOF_FOR_SOFTWARE_OR_SERVICE_DELIVERED
     * @see EVIDENCE_TYPE_RETURN_ADDRESS_FOR_SHIPPING
     * @see EVIDENCE_TYPE_COPY_OF_THE_EPARCEL_MANIFEST
     * @see EVIDENCE_TYPE_COPY_OF_SHIPPING_MANIFEST
     * @see EVIDENCE_TYPE_APPEAL_AFFIDAVIT
     * @see EVIDENCE_TYPE_RECEIPT_OF_REPLACEMENT
     * @see EVIDENCE_TYPE_COPY_OF_DRIVERS_LICENSE
     * @see EVIDENCE_TYPE_ACCOUNT_CHANGE_INFORMATION
     * @see EVIDENCE_TYPE_DELIVERY_ADDRESS
     * @see EVIDENCE_TYPE_CONFIRMATION_OF_RESOLUTION
     * @see EVIDENCE_TYPE_MERCHANT_RESPONSE
     * @see EVIDENCE_TYPE_PERMISSION_DESCRIPTION
     * @see EVIDENCE_TYPE_STATUS_OF_MERCHANDISE
     * @see EVIDENCE_TYPE_LOST_CARD_DETAILS
     * @see EVIDENCE_TYPE_LAST_VALID_TRANSACTION_DETAILS
     * @see EVIDENCE_TYPE_OTHER
     */
    public $evidence_type;

    /**
     * @var EvidenceInfo
     * The evidence-related information.
     */
    public $evidence_info;

    /**
     * @var array<Document>
     * An array of evidence documents.
     */
    public $documents;

    /**
     * @var string
     * Any evidence-related notes.
     */
    public $notes;

    /**
     * @var string
     * The source of the evidence.
     *
     * use one of constants defined in this class to set the value:
     * @see SOURCE_REQUESTED_FROM_BUYER
     * @see SOURCE_REQUESTED_FROM_SELLER
     * @see SOURCE_SUBMITTED_BY_BUYER
     * @see SOURCE_SUBMITTED_BY_SELLER
     * @see SOURCE_SUBMITTED_BY_PARTNER
     */
    public $source;

    /**
     * @var string
     * The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6).
     * Seconds are required while fractional seconds are optional.<blockquote><strong>Note:</strong> The regular
     * expression provides guidance but does not reject all invalid dates.</blockquote>
     */
    public $date;

    /**
     * @var string
     * The item ID. If the merchant provides multiple pieces of evidence and the transaction has multiple item IDs,
     * the merchant can use this value to associate a piece of evidence with an item ID.
     */
    public $item_id;
}
