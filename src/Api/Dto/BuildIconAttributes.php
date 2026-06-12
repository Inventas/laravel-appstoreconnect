<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildIconAttributes
 */
class BuildIconAttributes extends SpatieData
{
    public function __construct(
        public ImageAsset|Optional $iconAsset = new Optional,
        public IconAssetType|Optional $iconType = new Optional,
        public bool|Optional $masked = new Optional,
        public string|Optional $name = new Optional,
    ) {}
}
