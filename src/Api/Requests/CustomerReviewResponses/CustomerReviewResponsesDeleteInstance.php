<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\CustomerReviewResponses;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * customerReviewResponses_deleteInstance
 */
class CustomerReviewResponsesDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/customerReviewResponses/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
