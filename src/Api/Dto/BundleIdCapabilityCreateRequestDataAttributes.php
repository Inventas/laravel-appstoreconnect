<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BundleIdCapabilityCreateRequestDataAttributes
 */
class BundleIdCapabilityCreateRequestDataAttributes extends SpatieData
{
    /**
     * @param  array<int, CapabilitySetting>|Optional|null  $settings
     */
    public function __construct(
        public CapabilityType $capabilityType,
        /** @var array<int, CapabilitySetting>|Optional|null */
        public array|Optional|null $settings = new Optional,
    ) {}
}
