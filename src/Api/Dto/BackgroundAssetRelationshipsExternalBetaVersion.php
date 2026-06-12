<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BackgroundAssetRelationshipsExternalBetaVersion
 */
class BackgroundAssetRelationshipsExternalBetaVersion extends SpatieData
{
    public function __construct(
        public BackgroundAssetRelationshipsExternalBetaVersionData|Optional $data = new Optional,
    ) {}
}
