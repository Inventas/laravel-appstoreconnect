<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SubscriptionPlanAvailabilities;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * subscriptionPlanAvailabilities_availableTerritories_getToManyRelationship
 */
class SubscriptionPlanAvailabilitiesAvailableTerritoriesGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/subscriptionPlanAvailabilities/{$this->id}/relationships/availableTerritories";
    }

    public function __construct(
        protected string $id,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
