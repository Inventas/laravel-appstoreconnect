<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCustomProductPageLocalizationRelationships
 */
class AppCustomProductPageLocalizationRelationships extends SpatieData
{
    public function __construct(
        public AppCustomProductPageLocalizationRelationshipsAppCustomProductPageVersion|Optional $appCustomProductPageVersion = new Optional,
        public AppCustomProductPageLocalizationRelationshipsAppScreenshotSets|Optional $appScreenshotSets = new Optional,
        public AppCustomProductPageLocalizationRelationshipsAppPreviewSets|Optional $appPreviewSets = new Optional,
        public AppCustomProductPageLocalizationRelationshipsSearchKeywords|Optional $searchKeywords = new Optional,
    ) {}
}
