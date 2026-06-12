<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionExperimentV2relationshipsApp
 */
class AppStoreVersionExperimentV2relationshipsApp extends SpatieData
{
    public function __construct(
        public AppStoreVersionExperimentV2relationshipsAppData|Optional $data = new Optional,
    ) {}
}
