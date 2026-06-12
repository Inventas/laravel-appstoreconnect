<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BuildUploadFileCreateRequest
 */
class BuildUploadFileCreateRequest extends SpatieData
{
    public function __construct(
        public BuildUploadFileCreateRequestData $data,
    ) {}
}
