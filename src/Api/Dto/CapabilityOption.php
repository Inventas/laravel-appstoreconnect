<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CapabilityOption
 */
class CapabilityOption extends SpatieData
{
    public function __construct(
        public string|Optional $key = new Optional,
        public string|Optional $name = new Optional,
        public string|Optional $description = new Optional,
        public bool|Optional $enabledByDefault = new Optional,
        public bool|Optional $enabled = new Optional,
        public bool|Optional $supportsWildcard = new Optional,
    ) {}
}
