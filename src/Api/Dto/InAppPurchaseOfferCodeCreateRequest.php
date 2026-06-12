<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseOfferCodeCreateRequest
 */
class InAppPurchaseOfferCodeCreateRequest extends SpatieData
{
    /**
     * @param  array<int, InAppPurchaseOfferPriceInlineCreate>|Optional  $included
     */
    public function __construct(
        public InAppPurchaseOfferCodeCreateRequestData $data,
        /** @var array<int, InAppPurchaseOfferPriceInlineCreate>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
