<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BackgroundAssetVersionCreateRequestDataRelationshipsBackgroundAsset
 */
class BackgroundAssetVersionCreateRequestDataRelationshipsBackgroundAsset extends SpatieData
{
    public function __construct(
        public BackgroundAssetVersionCreateRequestDataRelationshipsBackgroundAssetData $data,
    ) {}
}
