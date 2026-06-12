<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppEventVideoClipCreateRequestDataAttributes
 */
class AppEventVideoClipCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public int $fileSize,
        public string $fileName,
        public AppEventAssetType $appEventAssetType,
        public string|Optional|null $previewFrameTimeCode = new Optional,
    ) {}
}
