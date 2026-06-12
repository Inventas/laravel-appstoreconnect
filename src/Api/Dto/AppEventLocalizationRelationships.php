<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppEventLocalizationRelationships
 */
class AppEventLocalizationRelationships extends SpatieData
{
    public function __construct(
        public AppEventLocalizationRelationshipsAppEvent|Optional $appEvent = new Optional,
        public AppEventLocalizationRelationshipsAppEventScreenshots|Optional $appEventScreenshots = new Optional,
        public AppEventLocalizationRelationshipsAppEventVideoClips|Optional $appEventVideoClips = new Optional,
    ) {}
}
