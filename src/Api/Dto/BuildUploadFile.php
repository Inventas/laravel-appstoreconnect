<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildUploadFile
 */
class BuildUploadFile extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public BuildUploadFileAttributes|Optional $attributes = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
