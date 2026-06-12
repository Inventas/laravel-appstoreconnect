<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BuildUploadCreateRequest
 */
class BuildUploadCreateRequest extends SpatieData
{
    public function __construct(
        public BuildUploadCreateRequestData $data,
    ) {}
}
