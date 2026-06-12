<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionPhasedReleaseCreateRequestDataRelationships
 */
class AppStoreVersionPhasedReleaseCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public AppStoreVersionPhasedReleaseCreateRequestDataRelationshipsAppStoreVersion $appStoreVersion,
    ) {}
}
