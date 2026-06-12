<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionOfferCodePriceRelationshipsTerritory
 */
class SubscriptionOfferCodePriceRelationshipsTerritory extends SpatieData
{
    public function __construct(
        public SubscriptionOfferCodePriceRelationshipsTerritoryData|Optional $data = new Optional,
    ) {}
}
