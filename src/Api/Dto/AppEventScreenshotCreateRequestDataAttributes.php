<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppEventScreenshotCreateRequestDataAttributes
 */
class AppEventScreenshotCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public int $fileSize,
        public string $fileName,
        public AppEventAssetType $appEventAssetType,
    ) {}
}
