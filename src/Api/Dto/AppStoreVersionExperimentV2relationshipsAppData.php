<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionExperimentV2relationshipsAppData
 */
class AppStoreVersionExperimentV2relationshipsAppData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
