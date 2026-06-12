<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\InAppPurchasePricePoints;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * inAppPurchasePricePoints_equalizations_getToManyRelated
 */
class InAppPurchasePricePointsEqualizationsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/inAppPurchasePricePoints/{$this->id}/equalizations";
    }

    /**
     * @param  array<int, string>|null  $filterterritory
     * @param  array<int, string>|null  $filterinAppPurchaseV2
     * @param  array<int, string>|null  $fieldsinAppPurchasePricePoints
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $filterterritory = null,
        /** @var array<int, string>|null */
        protected ?array $filterinAppPurchaseV2 = null,
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
            'filter[inAppPurchaseV2]' => $this->filterinAppPurchaseV2,
            'fields[inAppPurchasePricePoints]' => $this->fieldsinAppPurchasePricePoints,
            'fields[territories]' => $this->fieldsterritories,
            'limit' => $this->limit,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
