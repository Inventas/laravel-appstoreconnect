<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppClipHeaderImageCreateRequest
 */
class AppClipHeaderImageCreateRequest extends SpatieData
{
    public function __construct(
        public AppClipHeaderImageCreateRequestData $data,
    ) {}
}
