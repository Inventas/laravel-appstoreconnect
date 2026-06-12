<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionExperimentTreatmentLocalizationAttributes
 */
class AppStoreVersionExperimentTreatmentLocalizationAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $locale = new Optional,
    ) {}
}
