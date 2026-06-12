<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\InAppPurchases;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * inAppPurchasesV2_iapPriceSchedule_getToOneRelated
 */
class InAppPurchasesV2IapPriceScheduleGetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v2/inAppPurchases/{$this->id}/iapPriceSchedule";
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
        protected ?int $limitmanualPrices = null,
        protected ?int $limitautomaticPrices = null,
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
            'limit[manualPrices]' => $this->limitmanualPrices,
            'limit[automaticPrices]' => $this->limitautomaticPrices,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
