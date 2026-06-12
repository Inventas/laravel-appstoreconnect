<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppCustomProductPageUpdateRequest
 */
class AppCustomProductPageUpdateRequest extends SpatieData
{
    public function __construct(
        public AppCustomProductPageUpdateRequestData $data,
    ) {}
}
