<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionExperimentUpdateRequestDataAttributes
 */
class AppStoreVersionExperimentUpdateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string|Optional|null $name = new Optional,
        public int|Optional|null $trafficProportion = new Optional,
        public bool|Optional|null $started = new Optional,
    ) {}
}
