<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionExperimentRelationships
 */
class AppStoreVersionExperimentRelationships extends SpatieData
{
    public function __construct(
        public AppStoreVersionExperimentRelationshipsAppStoreVersion|Optional $appStoreVersion = new Optional,
        public AppStoreVersionExperimentRelationshipsAppStoreVersionExperimentTreatments|Optional $appStoreVersionExperimentTreatments = new Optional,
    ) {}
}
