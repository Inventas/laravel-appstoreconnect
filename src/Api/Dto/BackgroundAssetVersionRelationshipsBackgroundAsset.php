<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BackgroundAssetVersionRelationshipsBackgroundAsset
 */
class BackgroundAssetVersionRelationshipsBackgroundAsset extends SpatieData
{
    public function __construct(
        public BackgroundAssetVersionRelationshipsBackgroundAssetData|Optional $data = new Optional,
    ) {}
}
