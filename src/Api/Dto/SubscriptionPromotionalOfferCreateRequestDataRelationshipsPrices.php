<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionPromotionalOfferCreateRequestDataRelationshipsPrices
 */
class SubscriptionPromotionalOfferCreateRequestDataRelationshipsPrices extends SpatieData
{
    /**
     * @param  array<int, SubscriptionPromotionalOfferCreateRequestDataRelationshipsPricesDataItem>  $data
     */
    public function __construct(
        /** @var array<int, SubscriptionPromotionalOfferCreateRequestDataRelationshipsPricesDataItem> */
        public array $data,
    ) {}
}
