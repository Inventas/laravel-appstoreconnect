<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BackgroundAssetRelationships
 */
class BackgroundAssetRelationships extends SpatieData
{
    public function __construct(
        public BackgroundAssetRelationshipsApp|Optional $app = new Optional,
        public BackgroundAssetRelationshipsVersions|Optional $versions = new Optional,
        public BackgroundAssetRelationshipsAppStoreVersion|Optional $appStoreVersion = new Optional,
        public BackgroundAssetRelationshipsInternalBetaVersion|Optional $internalBetaVersion = new Optional,
        public BackgroundAssetRelationshipsExternalBetaVersion|Optional $externalBetaVersion = new Optional,
    ) {}
}
