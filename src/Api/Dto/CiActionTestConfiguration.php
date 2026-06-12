<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiActionTestConfiguration
 */
class CiActionTestConfiguration extends SpatieData
{
    /**
     * @param  array<int, CiTestDestination>|Optional  $testDestinations
     */
    public function __construct(
        public string|Optional $kind = new Optional,
        public string|Optional $testPlanName = new Optional,
        /** @var array<int, CiTestDestination>|Optional */
        public array|Optional $testDestinations = new Optional,
    ) {}
}
