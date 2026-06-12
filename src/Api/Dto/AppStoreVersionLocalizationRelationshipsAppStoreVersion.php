<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionLocalizationRelationshipsAppStoreVersion
 */
class AppStoreVersionLocalizationRelationshipsAppStoreVersion extends SpatieData
{
    public function __construct(
        public AppStoreVersionLocalizationRelationshipsAppStoreVersionData|Optional $data = new Optional,
    ) {}
}
