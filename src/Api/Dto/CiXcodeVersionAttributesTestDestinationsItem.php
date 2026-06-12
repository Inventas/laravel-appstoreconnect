<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiXcodeVersionAttributesTestDestinationsItem
 */
class CiXcodeVersionAttributesTestDestinationsItem extends SpatieData
{
    /**
     * @param  array<int, CiXcodeVersionAttributesTestDestinationsItemAvailableRuntimesItem>|Optional  $availableRuntimes
     */
    public function __construct(
        public string|Optional $deviceTypeName = new Optional,
        public string|Optional $deviceTypeIdentifier = new Optional,
        /** @var array<int, CiXcodeVersionAttributesTestDestinationsItemAvailableRuntimesItem>|Optional */
        public array|Optional $availableRuntimes = new Optional,
        public CiTestDestinationKind|Optional $kind = new Optional,
    ) {}
}
