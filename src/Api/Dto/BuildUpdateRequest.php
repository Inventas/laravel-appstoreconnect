<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BuildUpdateRequest
 */
class BuildUpdateRequest extends SpatieData
{
    public function __construct(
        public BuildUpdateRequestData $data,
    ) {}
}
