<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BackgroundAssetRelationshipsInternalBetaVersion
 */
class BackgroundAssetRelationshipsInternalBetaVersion extends SpatieData
{
    public function __construct(
        public BackgroundAssetRelationshipsInternalBetaVersionData|Optional $data = new Optional,
    ) {}
}
