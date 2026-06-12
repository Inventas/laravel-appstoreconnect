<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionExperimentCreateRequestDataAttributes
 */
class AppStoreVersionExperimentCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string $name,
        public int $trafficProportion,
    ) {}
}
