<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\CustomerReviewResponses;

use Inventas\AppStoreConnectKit\Api\Dto\CustomerReviewResponseV1createRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * customerReviewResponses_createInstance
 */
class CustomerReviewResponsesCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/customerReviewResponses';
    }

    public function __construct(
        protected CustomerReviewResponseV1createRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
