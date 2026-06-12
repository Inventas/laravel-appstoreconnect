<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BackgroundAssetAttributes
 */
class BackgroundAssetAttributes extends SpatieData
{
    public function __construct(
        public bool|Optional $archived = new Optional,
        public string|Optional $assetPackIdentifier = new Optional,
        public string|Optional $createdDate = new Optional,
        public int|Optional $usedBytes = new Optional,
    ) {}
}
