<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionUpdateRequestDataRelationshipsBuild
 */
class AppStoreVersionUpdateRequestDataRelationshipsBuild extends SpatieData
{
    public function __construct(
        public AppStoreVersionUpdateRequestDataRelationshipsBuildData|Optional $data = new Optional,
    ) {}
}
