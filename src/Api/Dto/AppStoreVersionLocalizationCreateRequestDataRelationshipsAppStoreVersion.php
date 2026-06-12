<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionLocalizationCreateRequestDataRelationshipsAppStoreVersion
 */
class AppStoreVersionLocalizationCreateRequestDataRelationshipsAppStoreVersion extends SpatieData
{
    public function __construct(
        public AppStoreVersionLocalizationCreateRequestDataRelationshipsAppStoreVersionData $data,
    ) {}
}
