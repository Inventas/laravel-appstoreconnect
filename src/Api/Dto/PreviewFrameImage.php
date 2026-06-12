<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * PreviewFrameImage
 */
class PreviewFrameImage extends SpatieData
{
    public function __construct(
        public ImageAsset|Optional $image = new Optional,
        public AppMediaPreviewFrameImageState|Optional $state = new Optional,
    ) {}
}
