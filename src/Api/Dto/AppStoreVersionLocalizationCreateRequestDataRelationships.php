<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionLocalizationCreateRequestDataRelationships
 */
class AppStoreVersionLocalizationCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public AppStoreVersionLocalizationCreateRequestDataRelationshipsAppStoreVersion $appStoreVersion,
    ) {}
}
