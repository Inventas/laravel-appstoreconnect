<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionLocalizationRelationships
 */
class AppStoreVersionLocalizationRelationships extends SpatieData
{
    public function __construct(
        public AppStoreVersionLocalizationRelationshipsAppStoreVersion|Optional $appStoreVersion = new Optional,
        public AppStoreVersionLocalizationRelationshipsAppScreenshotSets|Optional $appScreenshotSets = new Optional,
        public AppStoreVersionLocalizationRelationshipsAppPreviewSets|Optional $appPreviewSets = new Optional,
        public AppStoreVersionLocalizationRelationshipsSearchKeywords|Optional $searchKeywords = new Optional,
    ) {}
}
