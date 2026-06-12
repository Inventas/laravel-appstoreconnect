<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionExperimentTreatmentUpdateRequestDataAttributes
 */
class AppStoreVersionExperimentTreatmentUpdateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string|Optional|null $name = new Optional,
        public string|Optional|null $appIconName = new Optional,
    ) {}
}
