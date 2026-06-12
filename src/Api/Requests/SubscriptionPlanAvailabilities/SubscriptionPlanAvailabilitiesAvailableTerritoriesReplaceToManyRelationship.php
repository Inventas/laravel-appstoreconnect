<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SubscriptionPlanAvailabilities;

use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionPlanAvailabilityAvailableTerritoriesLinkagesRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * subscriptionPlanAvailabilities_availableTerritories_replaceToManyRelationship
 */
class SubscriptionPlanAvailabilitiesAvailableTerritoriesReplaceToManyRelationship extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/subscriptionPlanAvailabilities/{$this->id}/relationships/availableTerritories";
    }

    public function __construct(
        protected string $id,
        protected SubscriptionPlanAvailabilityAvailableTerritoriesLinkagesRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
