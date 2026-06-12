<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SubscriptionAvailabilities;

use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionAvailabilityCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * subscriptionAvailabilities_createInstance
 */
class SubscriptionAvailabilitiesCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/subscriptionAvailabilities';
    }

    public function __construct(
        protected SubscriptionAvailabilityCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
