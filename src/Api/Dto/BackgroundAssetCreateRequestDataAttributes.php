<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BackgroundAssetCreateRequestDataAttributes
 */
class BackgroundAssetCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string $assetPackIdentifier,
    ) {}
}
