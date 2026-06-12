<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * WinBackOfferCreateRequestDataRelationshipsPrices
 */
class WinBackOfferCreateRequestDataRelationshipsPrices extends SpatieData
{
    /**
     * @param  array<int, WinBackOfferCreateRequestDataRelationshipsPricesDataItem>  $data
     */
    public function __construct(
        /** @var array<int, WinBackOfferCreateRequestDataRelationshipsPricesDataItem> */
        public array $data,
    ) {}
}
