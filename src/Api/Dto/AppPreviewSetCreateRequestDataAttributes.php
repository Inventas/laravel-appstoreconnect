<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppPreviewSetCreateRequestDataAttributes
 */
class AppPreviewSetCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public PreviewType $previewType,
    ) {}
}
