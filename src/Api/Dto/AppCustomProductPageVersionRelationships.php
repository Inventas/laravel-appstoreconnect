<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCustomProductPageVersionRelationships
 */
class AppCustomProductPageVersionRelationships extends SpatieData
{
    public function __construct(
        public AppCustomProductPageVersionRelationshipsAppCustomProductPage|Optional $appCustomProductPage = new Optional,
        public AppCustomProductPageVersionRelationshipsAppCustomProductPageLocalizations|Optional $appCustomProductPageLocalizations = new Optional,
    ) {}
}
