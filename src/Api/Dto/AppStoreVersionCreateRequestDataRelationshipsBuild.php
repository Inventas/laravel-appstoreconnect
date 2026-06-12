<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionCreateRequestDataRelationshipsBuild
 */
class AppStoreVersionCreateRequestDataRelationshipsBuild extends SpatieData
{
    public function __construct(
        public AppStoreVersionCreateRequestDataRelationshipsBuildData|Optional $data = new Optional,
    ) {}
}
