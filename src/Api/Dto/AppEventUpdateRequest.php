<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppEventUpdateRequest
 */
class AppEventUpdateRequest extends SpatieData
{
    public function __construct(
        public AppEventUpdateRequestData $data,
    ) {}
}
