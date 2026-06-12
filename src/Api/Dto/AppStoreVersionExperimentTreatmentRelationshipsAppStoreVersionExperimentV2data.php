<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionExperimentTreatmentRelationshipsAppStoreVersionExperimentV2data
 */
class AppStoreVersionExperimentTreatmentRelationshipsAppStoreVersionExperimentV2data extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
