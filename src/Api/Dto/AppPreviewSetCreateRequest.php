<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppPreviewSetCreateRequest
 */
class AppPreviewSetCreateRequest extends SpatieData
{
    public function __construct(
        public AppPreviewSetCreateRequestData $data,
    ) {}
}
