<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPromotionalOfferPriceInlineCreateRelationshipsTerritory
 */
class SubscriptionPromotionalOfferPriceInlineCreateRelationshipsTerritory extends SpatieData
{
    public function __construct(
        public SubscriptionPromotionalOfferPriceInlineCreateRelationshipsTerritoryData|Optional $data = new Optional,
    ) {}
}
