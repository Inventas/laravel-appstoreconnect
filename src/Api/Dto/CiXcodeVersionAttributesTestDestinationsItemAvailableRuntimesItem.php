<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiXcodeVersionAttributesTestDestinationsItemAvailableRuntimesItem
 */
class CiXcodeVersionAttributesTestDestinationsItemAvailableRuntimesItem extends SpatieData
{
    public function __construct(
        public string|Optional $runtimeName = new Optional,
        public string|Optional $runtimeIdentifier = new Optional,
    ) {}
}
