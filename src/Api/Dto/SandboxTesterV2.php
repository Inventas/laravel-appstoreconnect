<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SandboxTesterV2
 */
class SandboxTesterV2 extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public SandboxTesterV2attributes|Optional $attributes = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
