<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Subscriptions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * subscriptions_prices_getToManyRelated
 */
class SubscriptionsPricesGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/subscriptions/{$this->id}/prices";
    }

    /**
     * @param  array<int, string>|null  $filterplanType
     * @param  array<int, string>|null  $filtersubscriptionPricePoint
     * @param  array<int, string>|null  $filterterritory
     * @param  array<int, string>|null  $fieldssubscriptionPrices
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $fieldssubscriptionPricePoints
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $filterplanType = null,
        /** @var array<int, string>|null */
        protected ?array $filtersubscriptionPricePoint = null,
        /** @var array<int, string>|null */
        protected ?array $filterterritory = null,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptionPrices = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsterritories = null,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptionPricePoints = null,
        protected ?int $limit = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'filter[planType]' => $this->filterplanType,
            'filter[subscriptionPricePoint]' => $this->filtersubscriptionPricePoint,
            'filter[territory]' => $this->filterterritory,
            'fields[subscriptionPrices]' => $this->fieldssubscriptionPrices,
            'fields[territories]' => $this->fieldsterritories,
            'fields[subscriptionPricePoints]' => $this->fieldssubscriptionPricePoints,
            'limit' => $this->limit,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
