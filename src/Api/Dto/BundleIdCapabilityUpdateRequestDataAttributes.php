<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BundleIdCapabilityUpdateRequestDataAttributes
 */
class BundleIdCapabilityUpdateRequestDataAttributes extends SpatieData
{
    /**
     * @param  array<int, CapabilitySetting>|Optional|null  $settings
     */
    public function __construct(
        public CapabilityType|Optional $capabilityType = new Optional,
        /** @var array<int, CapabilitySetting>|Optional|null */
        public array|Optional|null $settings = new Optional,
    ) {}
}
