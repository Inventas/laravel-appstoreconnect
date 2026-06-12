<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Subscriptions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * subscriptions_subscriptionAvailability_getToOneRelated
 */
class SubscriptionsSubscriptionAvailabilityGetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/subscriptions/{$this->id}/subscriptionAvailability";
    }

    /**
     * @param  array<int, string>|null  $fieldssubscriptionAvailabilities
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptionAvailabilities = null,
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
            'fields[subscriptionAvailabilities]' => $this->fieldssubscriptionAvailabilities,
            'fields[territories]' => $this->fieldsterritories,
            'include' => $this->include,
            'limit[availableTerritories]' => $this->limitavailableTerritories,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
