<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BuildUploadFileCreateRequestDataAttributes
 */
class BuildUploadFileCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string $assetType,
        public string $fileName,
        public int $fileSize,
        public string $uti,
    ) {}
}
