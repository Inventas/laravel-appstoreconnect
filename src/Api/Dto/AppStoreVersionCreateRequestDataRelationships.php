<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionCreateRequestDataRelationships
 */
class AppStoreVersionCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public AppStoreVersionCreateRequestDataRelationshipsApp $app,
        public AppStoreVersionCreateRequestDataRelationshipsAppStoreVersionLocalizations|Optional $appStoreVersionLocalizations = new Optional,
        public AppStoreVersionCreateRequestDataRelationshipsBuild|Optional $build = new Optional,
    ) {}
}
