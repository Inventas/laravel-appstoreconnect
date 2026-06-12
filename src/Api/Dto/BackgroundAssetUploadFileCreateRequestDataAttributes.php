<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BackgroundAssetUploadFileCreateRequestDataAttributes
 */
class BackgroundAssetUploadFileCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string $assetType,
        public string $fileName,
        public int $fileSize,
    ) {}
}
