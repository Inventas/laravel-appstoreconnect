<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppPreviewUpdateRequest
 */
class AppPreviewUpdateRequest extends SpatieData
{
    public function __construct(
        public AppPreviewUpdateRequestData $data,
    ) {}
}
