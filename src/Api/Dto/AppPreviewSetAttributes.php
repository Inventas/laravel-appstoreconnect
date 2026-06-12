<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPreviewSetAttributes
 */
class AppPreviewSetAttributes extends SpatieData
{
    public function __construct(
        public PreviewType|Optional $previewType = new Optional,
    ) {}
}
