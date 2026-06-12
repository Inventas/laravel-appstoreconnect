<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SubscriptionPlanAvailabilities;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * subscriptionPlanAvailabilities_getInstance
 */
class SubscriptionPlanAvailabilitiesGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/subscriptionPlanAvailabilities/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldssubscriptionPlanAvailabilities
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptionPlanAvailabilities = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsterritories = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitavailableTerritories = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[subscriptionPlanAvailabilities]' => $this->fieldssubscriptionPlanAvailabilities,
            'fields[territories]' => $this->fieldsterritories,
            'include' => $this->include,
            'limit[availableTerritories]' => $this->limitavailableTerritories,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
