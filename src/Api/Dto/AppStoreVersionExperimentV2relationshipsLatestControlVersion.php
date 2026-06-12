<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionExperimentV2relationshipsLatestControlVersion
 */
class AppStoreVersionExperimentV2relationshipsLatestControlVersion extends SpatieData
{
    public function __construct(
        public AppStoreVersionExperimentV2relationshipsLatestControlVersionData|Optional $data = new Optional,
    ) {}
}
