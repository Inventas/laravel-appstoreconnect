<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPreviewSetCreateRequestDataRelationships
 */
class AppPreviewSetCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public AppPreviewSetCreateRequestDataRelationshipsAppStoreVersionLocalization|Optional $appStoreVersionLocalization = new Optional,
        public AppPreviewSetCreateRequestDataRelationshipsAppCustomProductPageLocalization|Optional $appCustomProductPageLocalization = new Optional,
        public AppPreviewSetCreateRequestDataRelationshipsAppStoreVersionExperimentTreatmentLocalization|Optional $appStoreVersionExperimentTreatmentLocalization = new Optional,
    ) {}
}
