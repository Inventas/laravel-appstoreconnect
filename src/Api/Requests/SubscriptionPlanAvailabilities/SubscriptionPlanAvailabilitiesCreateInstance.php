<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SubscriptionPlanAvailabilities;

use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionPlanAvailabilityCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * subscriptionPlanAvailabilities_createInstance
 */
class SubscriptionPlanAvailabilitiesCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/subscriptionPlanAvailabilities';
    }

    public function __construct(
        protected SubscriptionPlanAvailabilityCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
