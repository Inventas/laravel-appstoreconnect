<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CapabilitySetting
 */
class CapabilitySetting extends SpatieData
{
    /**
     * @param  array<int, CapabilityOption>|Optional  $options
     */
    public function __construct(
        public string|Optional $key = new Optional,
        public string|Optional $name = new Optional,
        public string|Optional $description = new Optional,
        public bool|Optional $enabledByDefault = new Optional,
        public bool|Optional $visible = new Optional,
        public string|Optional $allowedInstances = new Optional,
        public int|Optional $minInstances = new Optional,
        /** @var array<int, CapabilityOption>|Optional */
        public array|Optional $options = new Optional,
    ) {}
}
