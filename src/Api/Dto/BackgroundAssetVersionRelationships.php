<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BackgroundAssetVersionRelationships
 */
class BackgroundAssetVersionRelationships extends SpatieData
{
    public function __construct(
        public BackgroundAssetVersionRelationshipsBackgroundAsset|Optional $backgroundAsset = new Optional,
        public BackgroundAssetVersionRelationshipsInternalBetaRelease|Optional $internalBetaRelease = new Optional,
        public BackgroundAssetVersionRelationshipsExternalBetaRelease|Optional $externalBetaRelease = new Optional,
        public BackgroundAssetVersionRelationshipsAppStoreRelease|Optional $appStoreRelease = new Optional,
        public BackgroundAssetVersionRelationshipsAssetFile|Optional $assetFile = new Optional,
        public BackgroundAssetVersionRelationshipsManifestFile|Optional $manifestFile = new Optional,
        public BackgroundAssetVersionRelationshipsBackgroundAssetUploadFiles|Optional $backgroundAssetUploadFiles = new Optional,
    ) {}
}
