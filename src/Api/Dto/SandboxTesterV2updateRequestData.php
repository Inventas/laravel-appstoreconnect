<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SandboxTesterV2updateRequestData
 */
class SandboxTesterV2updateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public SandboxTesterV2updateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
