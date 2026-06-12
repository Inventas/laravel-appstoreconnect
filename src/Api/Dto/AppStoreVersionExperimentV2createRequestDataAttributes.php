<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionExperimentV2createRequestDataAttributes
 */
class AppStoreVersionExperimentV2createRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string $name,
        public Platform $platform,
        public int $trafficProportion,
    ) {}
}
