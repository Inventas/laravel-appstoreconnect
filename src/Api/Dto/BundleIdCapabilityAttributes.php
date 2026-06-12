<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BundleIdCapabilityAttributes
 */
class BundleIdCapabilityAttributes extends SpatieData
{
    /**
     * @param  array<int, CapabilitySetting>|Optional  $settings
     */
    public function __construct(
        public CapabilityType|Optional $capabilityType = new Optional,
        /** @var array<int, CapabilitySetting>|Optional */
        public array|Optional $settings = new Optional,
    ) {}
}
