<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\InAppPurchasePriceSchedules;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * inAppPurchasePriceSchedules_automaticPrices_getToManyRelated
 */
class InAppPurchasePriceSchedulesAutomaticPricesGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/inAppPurchasePriceSchedules/{$this->id}/automaticPrices";
    }

    /**
     * @param  array<int, string>|null  $filterterritory
     * @param  array<int, string>|null  $fieldsinAppPurchasePrices
     * @param  array<int, string>|null  $fieldsinAppPurchasePricePoints
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $filterterritory = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsinAppPurchasePrices = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsinAppPurchasePricePoints = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsterritories = null,
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
            'fields[inAppPurchasePrices]' => $this->fieldsinAppPurchasePrices,
            'fields[inAppPurchasePricePoints]' => $this->fieldsinAppPurchasePricePoints,
            'fields[territories]' => $this->fieldsterritories,
            'limit' => $this->limit,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
