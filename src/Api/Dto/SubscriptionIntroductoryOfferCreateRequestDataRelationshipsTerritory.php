<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionIntroductoryOfferCreateRequestDataRelationshipsTerritory
 */
class SubscriptionIntroductoryOfferCreateRequestDataRelationshipsTerritory extends SpatieData
{
    public function __construct(
        public SubscriptionIntroductoryOfferCreateRequestDataRelationshipsTerritoryData|Optional $data = new Optional,
    ) {}
}
