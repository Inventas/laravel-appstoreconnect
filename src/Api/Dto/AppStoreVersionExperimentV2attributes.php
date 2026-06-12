<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionExperimentV2attributes
 */
class AppStoreVersionExperimentV2attributes extends SpatieData
{
    public function __construct(
        public string|Optional $name = new Optional,
        public Platform|Optional $platform = new Optional,
        public int|Optional $trafficProportion = new Optional,
        public string|Optional $state = new Optional,
        public bool|Optional $reviewRequired = new Optional,
        public string|Optional $startDate = new Optional,
        public string|Optional $endDate = new Optional,
    ) {}
}
