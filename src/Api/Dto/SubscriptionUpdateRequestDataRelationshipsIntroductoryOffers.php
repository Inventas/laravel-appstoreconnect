<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionUpdateRequestDataRelationshipsIntroductoryOffers
 */
class SubscriptionUpdateRequestDataRelationshipsIntroductoryOffers extends SpatieData
{
    /**
     * @param  array<int, SubscriptionUpdateRequestDataRelationshipsIntroductoryOffersDataItem>|Optional  $data
     */
    public function __construct(
        /** @var array<int, SubscriptionUpdateRequestDataRelationshipsIntroductoryOffersDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
