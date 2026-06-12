<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SubscriptionAvailabilities;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * subscriptionAvailabilities_availableTerritories_getToManyRelated
 */
class SubscriptionAvailabilitiesAvailableTerritoriesGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/subscriptionAvailabilities/{$this->id}/availableTerritories";
    }

    /**
     * @param  array<int, string>|null  $fieldsterritories
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsterritories = null,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[territories]' => $this->fieldsterritories, 'limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
