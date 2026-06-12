<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionIntroductoryOfferRelationshipsTerritory
 */
class SubscriptionIntroductoryOfferRelationshipsTerritory extends SpatieData
{
    public function __construct(
        public SubscriptionIntroductoryOfferRelationshipsTerritoryData|Optional $data = new Optional,
    ) {}
}
