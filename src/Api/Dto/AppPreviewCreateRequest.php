<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppPreviewCreateRequest
 */
class AppPreviewCreateRequest extends SpatieData
{
    public function __construct(
        public AppPreviewCreateRequestData $data,
    ) {}
}
