<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BuildUploadFileUpdateRequest
 */
class BuildUploadFileUpdateRequest extends SpatieData
{
    public function __construct(
        public BuildUploadFileUpdateRequestData $data,
    ) {}
}
