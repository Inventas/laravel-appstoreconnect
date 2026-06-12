<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseOfferCodes;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * inAppPurchaseOfferCodes_getInstance
 */
class InAppPurchaseOfferCodesGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/inAppPurchaseOfferCodes/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsinAppPurchaseOfferCodes
     * @param  array<int, string>|null  $fieldsinAppPurchaseOfferCodeOneTimeUseCodes
     * @param  array<int, string>|null  $fieldsinAppPurchaseOfferCodeCustomCodes
     * @param  array<int, string>|null  $fieldsinAppPurchaseOfferPrices
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsinAppPurchaseOfferCodes = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsinAppPurchaseOfferCodeOneTimeUseCodes = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsinAppPurchaseOfferCodeCustomCodes = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsinAppPurchaseOfferPrices = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitcustomCodes = null,
        protected ?int $limitoneTimeUseCodes = null,
        protected ?int $limitprices = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[inAppPurchaseOfferCodes]' => $this->fieldsinAppPurchaseOfferCodes,
            'fields[inAppPurchaseOfferCodeOneTimeUseCodes]' => $this->fieldsinAppPurchaseOfferCodeOneTimeUseCodes,
            'fields[inAppPurchaseOfferCodeCustomCodes]' => $this->fieldsinAppPurchaseOfferCodeCustomCodes,
            'fields[inAppPurchaseOfferPrices]' => $this->fieldsinAppPurchaseOfferPrices,
            'include' => $this->include,
            'limit[customCodes]' => $this->limitcustomCodes,
            'limit[oneTimeUseCodes]' => $this->limitoneTimeUseCodes,
            'limit[prices]' => $this->limitprices,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
