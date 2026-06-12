<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SubscriptionImages;

use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionImageCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * subscriptionImages_createInstance
 */
class SubscriptionImagesCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/subscriptionImages';
    }

    public function __construct(
        protected SubscriptionImageCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
