<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionExperimentV2relationships
 */
class AppStoreVersionExperimentV2relationships extends SpatieData
{
    public function __construct(
        public AppStoreVersionExperimentV2relationshipsApp|Optional $app = new Optional,
        public AppStoreVersionExperimentV2relationshipsLatestControlVersion|Optional $latestControlVersion = new Optional,
        public AppStoreVersionExperimentV2relationshipsControlVersions|Optional $controlVersions = new Optional,
        public AppStoreVersionExperimentV2relationshipsAppStoreVersionExperimentTreatments|Optional $appStoreVersionExperimentTreatments = new Optional,
    ) {}
}
