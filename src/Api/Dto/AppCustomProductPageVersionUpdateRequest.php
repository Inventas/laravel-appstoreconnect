<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppCustomProductPageVersionUpdateRequest
 */
class AppCustomProductPageVersionUpdateRequest extends SpatieData
{
    public function __construct(
        public AppCustomProductPageVersionUpdateRequestData $data,
    ) {}
}
