<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BuildUploadFileResponse
 */
class BuildUploadFileResponse extends SpatieData
{
    public function __construct(
        public BuildUploadFile $data,
        public DocumentLinks $links,
    ) {}
}
