<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPreviewCreateRequestDataAttributes
 */
class AppPreviewCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public int $fileSize,
        public string $fileName,
        public string|Optional|null $previewFrameTimeCode = new Optional,
        public string|Optional|null $mimeType = new Optional,
    ) {}
}
