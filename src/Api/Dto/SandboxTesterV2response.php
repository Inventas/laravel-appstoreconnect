<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SandboxTesterV2Response
 */
class SandboxTesterV2response extends SpatieData
{
    public function __construct(
        public SandboxTesterV2 $data,
        public DocumentLinks $links,
    ) {}
}
