<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SubscriptionPlanAvailabilities;

use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionPlanAvailabilityUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * subscriptionPlanAvailabilities_updateInstance
 */
class SubscriptionPlanAvailabilitiesUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/subscriptionPlanAvailabilities/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected SubscriptionPlanAvailabilityUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
