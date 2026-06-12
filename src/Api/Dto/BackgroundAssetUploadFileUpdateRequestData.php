<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BackgroundAssetUploadFileUpdateRequestData
 */
class BackgroundAssetUploadFileUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public BackgroundAssetUploadFileUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
