<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildUploadResponse
 */
class BuildUploadResponse extends SpatieData
{
    /**
     * @param  array<int, BuildUploadFile|Build>|Optional  $included
     */
    public function __construct(
        public BuildUpload $data,
        public DocumentLinks $links,
        /** @var array<int, BuildUploadFile|Build>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
