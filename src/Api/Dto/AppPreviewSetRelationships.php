<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPreviewSetRelationships
 */
class AppPreviewSetRelationships extends SpatieData
{
    public function __construct(
        public AppPreviewSetRelationshipsAppStoreVersionLocalization|Optional $appStoreVersionLocalization = new Optional,
        public AppPreviewSetRelationshipsAppCustomProductPageLocalization|Optional $appCustomProductPageLocalization = new Optional,
        public AppPreviewSetRelationshipsAppStoreVersionExperimentTreatmentLocalization|Optional $appStoreVersionExperimentTreatmentLocalization = new Optional,
        public AppPreviewSetRelationshipsAppPreviews|Optional $appPreviews = new Optional,
    ) {}
}
