<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiTestDestination
 */
class CiTestDestination extends SpatieData
{
    public function __construct(
        public string|Optional $deviceTypeName = new Optional,
        public string|Optional $deviceTypeIdentifier = new Optional,
        public string|Optional $runtimeName = new Optional,
        public string|Optional $runtimeIdentifier = new Optional,
        public CiTestDestinationKind|Optional $kind = new Optional,
    ) {}
}
