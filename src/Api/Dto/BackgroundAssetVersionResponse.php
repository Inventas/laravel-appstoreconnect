<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BackgroundAssetVersionResponse
 */
class BackgroundAssetVersionResponse extends SpatieData
{
    /**
     * @param  array<int, BackgroundAssetUploadFile|BackgroundAssetVersionAppStoreRelease|BackgroundAssetVersionExternalBetaRelease|BackgroundAssetVersionInternalBetaRelease|BackgroundAsset>|Optional  $included
     */
    public function __construct(
        public BackgroundAssetVersion $data,
        public DocumentLinks $links,
        /** @var array<int, BackgroundAssetUploadFile|BackgroundAssetVersionAppStoreRelease|BackgroundAssetVersionExternalBetaRelease|BackgroundAssetVersionInternalBetaRelease|BackgroundAsset>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
