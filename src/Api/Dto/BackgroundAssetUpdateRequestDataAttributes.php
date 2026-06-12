<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BackgroundAssetUpdateRequestDataAttributes
 */
class BackgroundAssetUpdateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public bool|Optional|null $archived = new Optional,
    ) {}
}
