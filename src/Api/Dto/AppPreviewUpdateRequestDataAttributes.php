<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPreviewUpdateRequestDataAttributes
 */
class AppPreviewUpdateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string|Optional|null $sourceFileChecksum = new Optional,
        public string|Optional|null $previewFrameTimeCode = new Optional,
        public bool|Optional|null $uploaded = new Optional,
    ) {}
}
