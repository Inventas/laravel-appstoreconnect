<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseOfferCodeCreateRequestDataRelationshipsPrices
 */
class InAppPurchaseOfferCodeCreateRequestDataRelationshipsPrices extends SpatieData
{
    /**
     * @param  array<int, InAppPurchaseOfferCodeCreateRequestDataRelationshipsPricesDataItem>  $data
     */
    public function __construct(
        /** @var array<int, InAppPurchaseOfferCodeCreateRequestDataRelationshipsPricesDataItem> */
        public array $data,
    ) {}
}
