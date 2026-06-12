<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionUpdateRequestDataRelationships
 */
class AppStoreVersionUpdateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public AppStoreVersionUpdateRequestDataRelationshipsBuild|Optional $build = new Optional,
        public AppStoreVersionUpdateRequestDataRelationshipsAppClipDefaultExperience|Optional $appClipDefaultExperience = new Optional,
    ) {}
}
