<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BackgroundAssetVersionCreateRequestDataRelationships
 */
class BackgroundAssetVersionCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public BackgroundAssetVersionCreateRequestDataRelationshipsBackgroundAsset $backgroundAsset,
    ) {}
}
