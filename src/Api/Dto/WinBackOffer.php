<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * WinBackOffer
 */
class WinBackOffer extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public WinBackOfferAttributes|Optional $attributes = new Optional,
        public WinBackOfferRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
