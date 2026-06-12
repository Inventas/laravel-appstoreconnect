<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionPromotionCreateRequestDataRelationshipsAppStoreVersionExperimentTreatment
 */
class AppStoreVersionPromotionCreateRequestDataRelationshipsAppStoreVersionExperimentTreatment extends SpatieData
{
    public function __construct(
        public AppStoreVersionPromotionCreateRequestDataRelationshipsAppStoreVersionExperimentTreatmentData $data,
    ) {}
}
