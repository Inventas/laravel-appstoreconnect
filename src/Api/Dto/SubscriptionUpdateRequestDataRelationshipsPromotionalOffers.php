<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionUpdateRequestDataRelationshipsPromotionalOffers
 */
class SubscriptionUpdateRequestDataRelationshipsPromotionalOffers extends SpatieData
{
    /**
     * @param  array<int, SubscriptionUpdateRequestDataRelationshipsPromotionalOffersDataItem>|Optional  $data
     */
    public function __construct(
        /** @var array<int, SubscriptionUpdateRequestDataRelationshipsPromotionalOffersDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
