<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseOfferCodes;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * inAppPurchaseOfferCodes_prices_getToManyRelated
 */
class InAppPurchaseOfferCodesPricesGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/inAppPurchaseOfferCodes/{$this->id}/prices";
    }

    /**
     * @param  array<int, string>|null  $filterterritory
     * @param  array<int, string>|null  $fieldsinAppPurchaseOfferPrices
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $fieldsinAppPurchasePricePoints
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $filterterritory = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsinAppPurchaseOfferPrices = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsterritories = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsinAppPurchasePricePoints = null,
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
            'filter[territory]' => $this->filterterritory,
            'fields[inAppPurchaseOfferPrices]' => $this->fieldsinAppPurchaseOfferPrices,
            'fields[territories]' => $this->fieldsterritories,
            'fields[inAppPurchasePricePoints]' => $this->fieldsinAppPurchasePricePoints,
            'limit' => $this->limit,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
