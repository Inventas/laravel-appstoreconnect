<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionExperimentTreatmentCreateRequestDataAttributes
 */
class AppStoreVersionExperimentTreatmentCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string $name,
        public string|Optional|null $appIconName = new Optional,
    ) {}
}
