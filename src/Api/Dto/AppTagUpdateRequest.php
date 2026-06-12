<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppTagUpdateRequest
 */
class AppTagUpdateRequest extends SpatieData
{
    public function __construct(
        public AppTagUpdateRequestData $data,
    ) {}
}
