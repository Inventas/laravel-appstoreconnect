<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildUploadFileUpdateRequestData
 */
class BuildUploadFileUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public BuildUploadFileUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
