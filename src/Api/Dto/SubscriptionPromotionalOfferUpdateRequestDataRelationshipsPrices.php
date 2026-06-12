<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPromotionalOfferUpdateRequestDataRelationshipsPrices
 */
class SubscriptionPromotionalOfferUpdateRequestDataRelationshipsPrices extends SpatieData
{
    /**
     * @param  array<int, SubscriptionPromotionalOfferUpdateRequestDataRelationshipsPricesDataItem>|Optional  $data
     */
    public function __construct(
        /** @var array<int, SubscriptionPromotionalOfferUpdateRequestDataRelationshipsPricesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
