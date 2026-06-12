<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionExperimentTreatmentRelationshipsAppStoreVersionExperimentV2
 */
class AppStoreVersionExperimentTreatmentRelationshipsAppStoreVersionExperimentV2 extends SpatieData
{
    public function __construct(
        public AppStoreVersionExperimentTreatmentRelationshipsAppStoreVersionExperimentV2data|Optional $data = new Optional,
    ) {}
}
