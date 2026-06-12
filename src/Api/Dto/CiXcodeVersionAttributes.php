<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiXcodeVersionAttributes
 */
class CiXcodeVersionAttributes extends SpatieData
{
    /**
     * @param  array<int, CiXcodeVersionAttributesTestDestinationsItem>|Optional  $testDestinations
     */
    public function __construct(
        public string|Optional $version = new Optional,
        public string|Optional $name = new Optional,
        /** @var array<int, CiXcodeVersionAttributesTestDestinationsItem>|Optional */
        public array|Optional $testDestinations = new Optional,
    ) {}
}
