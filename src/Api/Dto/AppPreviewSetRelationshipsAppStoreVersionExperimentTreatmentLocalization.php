<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPreviewSetRelationshipsAppStoreVersionExperimentTreatmentLocalization
 */
class AppPreviewSetRelationshipsAppStoreVersionExperimentTreatmentLocalization extends SpatieData
{
    public function __construct(
        public AppPreviewSetRelationshipsAppStoreVersionExperimentTreatmentLocalizationData|Optional $data = new Optional,
    ) {}
}
