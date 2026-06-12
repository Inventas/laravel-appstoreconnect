<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPromotionalOfferPriceRelationshipsTerritory
 */
class SubscriptionPromotionalOfferPriceRelationshipsTerritory extends SpatieData
{
    public function __construct(
        public SubscriptionPromotionalOfferPriceRelationshipsTerritoryData|Optional $data = new Optional,
    ) {}
}
