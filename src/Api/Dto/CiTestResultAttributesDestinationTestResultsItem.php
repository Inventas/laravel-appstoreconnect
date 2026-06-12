<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiTestResultAttributesDestinationTestResultsItem
 */
class CiTestResultAttributesDestinationTestResultsItem extends SpatieData
{
    public function __construct(
        public string|Optional $uuid = new Optional,
        public string|Optional $deviceName = new Optional,
        public string|Optional $osVersion = new Optional,
        public CiTestStatus|Optional $status = new Optional,
        public int|float|Optional $duration = new Optional,
    ) {}
}
