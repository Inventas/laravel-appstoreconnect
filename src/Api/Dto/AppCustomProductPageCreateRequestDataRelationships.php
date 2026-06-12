<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCustomProductPageCreateRequestDataRelationships
 */
class AppCustomProductPageCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public AppCustomProductPageCreateRequestDataRelationshipsApp $app,
        public AppCustomProductPageCreateRequestDataRelationshipsAppCustomProductPageVersions|Optional $appCustomProductPageVersions = new Optional,
        public AppCustomProductPageCreateRequestDataRelationshipsAppStoreVersionTemplate|Optional $appStoreVersionTemplate = new Optional,
        public AppCustomProductPageCreateRequestDataRelationshipsCustomProductPageTemplate|Optional $customProductPageTemplate = new Optional,
    ) {}
}
