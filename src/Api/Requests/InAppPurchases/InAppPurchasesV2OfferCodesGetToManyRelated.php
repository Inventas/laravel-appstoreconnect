<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\InAppPurchases;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * inAppPurchasesV2_offerCodes_getToManyRelated
 */
class InAppPurchasesV2OfferCodesGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v2/inAppPurchases/{$this->id}/offerCodes";
    }

    /**
     * @param  array<int, string>|null  $filterterritory
     * @param  array<int, string>|null  $fieldsinAppPurchaseOfferCodes
     * @param  array<int, string>|null  $fieldsinAppPurchaseOfferCodeOneTimeUseCodes
     * @param  array<int, string>|null  $fieldsinAppPurchaseOfferCodeCustomCodes
     * @param  array<int, string>|null  $fieldsinAppPurchaseOfferPrices
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $filterterritory = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsinAppPurchaseOfferCodes = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsinAppPurchaseOfferCodeOneTimeUseCodes = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsinAppPurchaseOfferCodeCustomCodes = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsinAppPurchaseOfferPrices = null,
        protected ?int $limit = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitoneTimeUseCodes = null,
        protected ?int $limitcustomCodes = null,
        protected ?int $limitprices = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'filter[territory]' => $this->filterterritory,
            'fields[inAppPurchaseOfferCodes]' => $this->fieldsinAppPurchaseOfferCodes,
            'fields[inAppPurchaseOfferCodeOneTimeUseCodes]' => $this->fieldsinAppPurchaseOfferCodeOneTimeUseCodes,
            'fields[inAppPurchaseOfferCodeCustomCodes]' => $this->fieldsinAppPurchaseOfferCodeCustomCodes,
            'fields[inAppPurchaseOfferPrices]' => $this->fieldsinAppPurchaseOfferPrices,
            'limit' => $this->limit,
            'include' => $this->include,
            'limit[oneTimeUseCodes]' => $this->limitoneTimeUseCodes,
            'limit[customCodes]' => $this->limitcustomCodes,
            'limit[prices]' => $this->limitprices,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
