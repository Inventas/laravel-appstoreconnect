<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCustomProductPageRelationships
 */
class AppCustomProductPageRelationships extends SpatieData
{
    public function __construct(
        public AppCustomProductPageRelationshipsApp|Optional $app = new Optional,
        public AppCustomProductPageRelationshipsAppCustomProductPageVersions|Optional $appCustomProductPageVersions = new Optional,
    ) {}
}
