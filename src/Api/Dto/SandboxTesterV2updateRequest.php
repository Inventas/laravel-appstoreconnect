<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SandboxTesterV2UpdateRequest
 */
class SandboxTesterV2updateRequest extends SpatieData
{
    public function __construct(
        public SandboxTesterV2updateRequestData $data,
    ) {}
}
