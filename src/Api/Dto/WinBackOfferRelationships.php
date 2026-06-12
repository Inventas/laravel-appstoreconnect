<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * WinBackOfferRelationships
 */
class WinBackOfferRelationships extends SpatieData
{
    public function __construct(
        public WinBackOfferRelationshipsPrices|Optional $prices = new Optional,
    ) {}
}
