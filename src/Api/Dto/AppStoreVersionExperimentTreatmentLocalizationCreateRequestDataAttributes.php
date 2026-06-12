<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionExperimentTreatmentLocalizationCreateRequestDataAttributes
 */
class AppStoreVersionExperimentTreatmentLocalizationCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string $locale,
    ) {}
}
