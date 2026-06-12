<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * WinBackOfferCreateRequestData
 */
class WinBackOfferCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public WinBackOfferCreateRequestDataAttributes $attributes,
        public WinBackOfferCreateRequestDataRelationships $relationships,
    ) {}
}
