<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BackgroundAssetRelationshipsAppStoreVersion
 */
class BackgroundAssetRelationshipsAppStoreVersion extends SpatieData
{
    public function __construct(
        public BackgroundAssetRelationshipsAppStoreVersionData|Optional $data = new Optional,
    ) {}
}
