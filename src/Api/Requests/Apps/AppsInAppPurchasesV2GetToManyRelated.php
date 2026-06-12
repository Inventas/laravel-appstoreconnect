<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Apps;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * apps_inAppPurchasesV2_getToManyRelated
 */
class AppsInAppPurchasesV2GetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/apps/{$this->id}/inAppPurchasesV2";
    }

    /**
     * @param  array<int, string>|null  $filterproductId
     * @param  array<int, string>|null  $filtername
     * @param  array<int, string>|null  $filterstate
     * @param  array<int, string>|null  $filterinAppPurchaseType
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldsinAppPurchases
     * @param  array<int, string>|null  $fieldsinAppPurchaseLocalizations
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
        protected ?array $filterproductId = null,
        /** @var array<int, string>|null */
        protected ?array $filtername = null,
        /** @var array<int, string>|null */
        protected ?array $filterstate = null,
        /** @var array<int, string>|null */
        protected ?array $filterinAppPurchaseType = null,
        /** @var array<int, string>|null */
        protected ?array $sort = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsinAppPurchases = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsinAppPurchaseLocalizations = null,
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
        protected ?int $limit = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitinAppPurchaseLocalizations = null,
        protected ?int $limitimages = null,
        protected ?int $limitofferCodes = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'filter[productId]' => $this->filterproductId,
            'filter[name]' => $this->filtername,
            'filter[state]' => $this->filterstate,
            'filter[inAppPurchaseType]' => $this->filterinAppPurchaseType,
            'sort' => $this->sort,
            'fields[inAppPurchases]' => $this->fieldsinAppPurchases,
            'fields[inAppPurchaseLocalizations]' => $this->fieldsinAppPurchaseLocalizations,
            'fields[inAppPurchaseContents]' => $this->fieldsinAppPurchaseContents,
            'fields[inAppPurchaseAppStoreReviewScreenshots]' => $this->fieldsinAppPurchaseAppStoreReviewScreenshots,
            'fields[promotedPurchases]' => $this->fieldspromotedPurchases,
            'fields[inAppPurchasePriceSchedules]' => $this->fieldsinAppPurchasePriceSchedules,
            'fields[inAppPurchaseAvailabilities]' => $this->fieldsinAppPurchaseAvailabilities,
            'fields[inAppPurchaseImages]' => $this->fieldsinAppPurchaseImages,
            'fields[inAppPurchaseOfferCodes]' => $this->fieldsinAppPurchaseOfferCodes,
            'limit' => $this->limit,
            'include' => $this->include,
            'limit[inAppPurchaseLocalizations]' => $this->limitinAppPurchaseLocalizations,
            'limit[images]' => $this->limitimages,
            'limit[offerCodes]' => $this->limitofferCodes,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
