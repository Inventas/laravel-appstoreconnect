<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\CustomerReviews;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * customerReviews_response_getToOneRelationship
 */
class CustomerReviewsResponseGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/customerReviews/{$this->id}/relationships/response";
    }

    public function __construct(
        protected string $id,
    ) {}
}
