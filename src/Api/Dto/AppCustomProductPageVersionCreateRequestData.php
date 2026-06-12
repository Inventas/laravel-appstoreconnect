<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCustomProductPageVersionCreateRequestData
 */
class AppCustomProductPageVersionCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public AppCustomProductPageVersionCreateRequestDataRelationships $relationships,
        public AppCustomProductPageVersionCreateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
