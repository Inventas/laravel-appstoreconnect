<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCustomProductPageVersionCreateRequestDataRelationships
 */
class AppCustomProductPageVersionCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public AppCustomProductPageVersionCreateRequestDataRelationshipsAppCustomProductPage $appCustomProductPage,
        public AppCustomProductPageVersionCreateRequestDataRelationshipsAppCustomProductPageLocalizations|Optional $appCustomProductPageLocalizations = new Optional,
    ) {}
}
