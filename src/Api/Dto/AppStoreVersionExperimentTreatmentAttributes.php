<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionExperimentTreatmentAttributes
 */
class AppStoreVersionExperimentTreatmentAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $name = new Optional,
        public ImageAsset|Optional $appIcon = new Optional,
        public string|Optional $appIconName = new Optional,
        public string|Optional $promotedDate = new Optional,
    ) {}
}
