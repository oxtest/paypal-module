<?php

namespace OxidProfessionalServices\PayPal\Api\Model\Disputes;

use JsonSerializable;
use OxidProfessionalServices\PayPal\Api\Model\BaseModel;

/**
 * Arrays of auto-complete and DidYouMean values. Includes links that enable you to navigate through the
 * response.
 *
 * generated from: response-suggestion_response.json
 */
class SuggestionResponse implements JsonSerializable
{
    use BaseModel;

    /**
     * @var array<string>
     * An array of auto complete values for the given search_text if present.
     */
    public $suggestions;

    /**
     * @var string
     * The possible DidYouMean value if there are no suggestions for given search_text.
     */
    public $corrected_search_text;

    /**
     * @var array<array>
     * An array of request-related [HATEOAS links](/docs/api/hateoas-links/).
     */
    public $links;
}
