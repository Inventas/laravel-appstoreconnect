<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionOfferCodePriceInlineCreateRelationshipsTerritory
 */
class SubscriptionOfferCodePriceInlineCreateRelationshipsTerritory extends SpatieData
{
    public function __construct(
        public SubscriptionOfferCodePriceInlineCreateRelationshipsTerritoryData|Optional $data = new Optional,
    ) {}
}
