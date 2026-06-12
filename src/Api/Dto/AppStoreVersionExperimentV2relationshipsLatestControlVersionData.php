<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionExperimentV2relationshipsLatestControlVersionData
 */
class AppStoreVersionExperimentV2relationshipsLatestControlVersionData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
