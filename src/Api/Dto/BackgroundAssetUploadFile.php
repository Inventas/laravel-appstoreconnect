<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BackgroundAssetUploadFile
 */
class BackgroundAssetUploadFile extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public BackgroundAssetUploadFileAttributes|Optional $attributes = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
