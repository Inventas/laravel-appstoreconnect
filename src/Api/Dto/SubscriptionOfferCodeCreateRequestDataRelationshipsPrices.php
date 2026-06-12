<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionOfferCodeCreateRequestDataRelationshipsPrices
 */
class SubscriptionOfferCodeCreateRequestDataRelationshipsPrices extends SpatieData
{
    /**
     * @param  array<int, SubscriptionOfferCodeCreateRequestDataRelationshipsPricesDataItem>  $data
     */
    public function __construct(
        /** @var array<int, SubscriptionOfferCodeCreateRequestDataRelationshipsPricesDataItem> */
        public array $data,
    ) {}
}
