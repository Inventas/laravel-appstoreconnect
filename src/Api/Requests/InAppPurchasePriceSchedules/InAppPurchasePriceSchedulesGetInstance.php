<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\InAppPurchasePriceSchedules;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * inAppPurchasePriceSchedules_getInstance
 */
class InAppPurchasePriceSchedulesGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/inAppPurchasePriceSchedules/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsinAppPurchasePriceSchedules
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $fieldsinAppPurchasePrices
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsinAppPurchasePriceSchedules = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsterritories = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsinAppPurchasePrices = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitautomaticPrices = null,
        protected ?int $limitmanualPrices = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[inAppPurchasePriceSchedules]' => $this->fieldsinAppPurchasePriceSchedules,
            'fields[territories]' => $this->fieldsterritories,
            'fields[inAppPurchasePrices]' => $this->fieldsinAppPurchasePrices,
            'include' => $this->include,
            'limit[automaticPrices]' => $this->limitautomaticPrices,
            'limit[manualPrices]' => $this->limitmanualPrices,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
