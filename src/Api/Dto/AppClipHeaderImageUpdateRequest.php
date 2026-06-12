<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppClipHeaderImageUpdateRequest
 */
class AppClipHeaderImageUpdateRequest extends SpatieData
{
    public function __construct(
        public AppClipHeaderImageUpdateRequestData $data,
    ) {}
}
