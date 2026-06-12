<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionUpdateRequestDataRelationshipsIntroductoryOffersDataItem
 */
class SubscriptionUpdateRequestDataRelationshipsIntroductoryOffersDataItem extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
