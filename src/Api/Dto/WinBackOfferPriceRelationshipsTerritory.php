<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * WinBackOfferPriceRelationshipsTerritory
 */
class WinBackOfferPriceRelationshipsTerritory extends SpatieData
{
    public function __construct(
        public WinBackOfferPriceRelationshipsTerritoryData|Optional $data = new Optional,
    ) {}
}
