<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPreviewSetCreateRequestDataRelationshipsAppStoreVersionExperimentTreatmentLocalization
 */
class AppPreviewSetCreateRequestDataRelationshipsAppStoreVersionExperimentTreatmentLocalization extends SpatieData
{
    public function __construct(
        public AppPreviewSetCreateRequestDataRelationshipsAppStoreVersionExperimentTreatmentLocalizationData|Optional $data = new Optional,
    ) {}
}
