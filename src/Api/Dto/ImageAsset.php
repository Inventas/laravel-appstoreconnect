<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ImageAsset
 */
class ImageAsset extends SpatieData
{
    public function __construct(
        public string|Optional $templateUrl = new Optional,
        public int|Optional $width = new Optional,
        public int|Optional $height = new Optional,
    ) {}
}
