<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\InAppPurchases;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * inAppPurchasesV2_getInstance
 */
class InAppPurchasesV2GetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v2/inAppPurchases/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsinAppPurchases
     * @param  array<int, string>|null  $fieldsinAppPurchaseLocalizations
     * @param  array<int, string>|null  $fieldsinAppPurchasePricePoints
     * @param  array<int, string>|null  $fieldsinAppPurchaseContents
     * @param  array<int, string>|null  $fieldsinAppPurchaseAppStoreReviewScreenshots
     * @param  array<int, string>|null  $fieldspromotedPurchases
     * @param  array<int, string>|null  $fieldsinAppPurchasePriceSchedules
     * @param  array<int, string>|null  $fieldsinAppPurchaseAvailabilities
     * @param  array<int, string>|null  $fieldsinAppPurchaseImages
     * @param  array<int, string>|null  $fieldsinAppPurchaseOfferCodes
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsinAppPurchases = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsinAppPurchaseLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsinAppPurchasePricePoints = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsinAppPurchaseContents = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsinAppPurchaseAppStoreReviewScreenshots = null,
        /** @var array<int, string>|null */
        protected ?array $fieldspromotedPurchases = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsinAppPurchasePriceSchedules = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsinAppPurchaseAvailabilities = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsinAppPurchaseImages = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsinAppPurchaseOfferCodes = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitimages = null,
        protected ?int $limitinAppPurchaseLocalizations = null,
        protected ?int $limitofferCodes = null,
        protected ?int $limitpricePoints = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[inAppPurchases]' => $this->fieldsinAppPurchases,
            'fields[inAppPurchaseLocalizations]' => $this->fieldsinAppPurchaseLocalizations,
            'fields[inAppPurchasePricePoints]' => $this->fieldsinAppPurchasePricePoints,
            'fields[inAppPurchaseContents]' => $this->fieldsinAppPurchaseContents,
            'fields[inAppPurchaseAppStoreReviewScreenshots]' => $this->fieldsinAppPurchaseAppStoreReviewScreenshots,
            'fields[promotedPurchases]' => $this->fieldspromotedPurchases,
            'fields[inAppPurchasePriceSchedules]' => $this->fieldsinAppPurchasePriceSchedules,
            'fields[inAppPurchaseAvailabilities]' => $this->fieldsinAppPurchaseAvailabilities,
            'fields[inAppPurchaseImages]' => $this->fieldsinAppPurchaseImages,
            'fields[inAppPurchaseOfferCodes]' => $this->fieldsinAppPurchaseOfferCodes,
            'include' => $this->include,
            'limit[images]' => $this->limitimages,
            'limit[inAppPurchaseLocalizations]' => $this->limitinAppPurchaseLocalizations,
            'limit[offerCodes]' => $this->limitofferCodes,
            'limit[pricePoints]' => $this->limitpricePoints,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
