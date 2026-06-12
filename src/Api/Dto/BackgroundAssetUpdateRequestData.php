<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BackgroundAssetUpdateRequestData
 */
class BackgroundAssetUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public BackgroundAssetUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
