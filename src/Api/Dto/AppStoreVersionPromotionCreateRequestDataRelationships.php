<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionPromotionCreateRequestDataRelationships
 */
class AppStoreVersionPromotionCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public AppStoreVersionPromotionCreateRequestDataRelationshipsAppStoreVersion $appStoreVersion,
        public AppStoreVersionPromotionCreateRequestDataRelationshipsAppStoreVersionExperimentTreatment $appStoreVersionExperimentTreatment,
    ) {}
}
