<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPriceInlineCreateRelationshipsTerritory
 */
class SubscriptionPriceInlineCreateRelationshipsTerritory extends SpatieData
{
    public function __construct(
        public SubscriptionPriceInlineCreateRelationshipsTerritoryData|Optional $data = new Optional,
    ) {}
}
