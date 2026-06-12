<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BackgroundAssetVersionsResponse
 */
class BackgroundAssetVersionsResponse extends SpatieData
{
    /**
     * @param  array<int, BackgroundAssetVersion>  $data
     * @param  array<int, BackgroundAssetUploadFile|BackgroundAssetVersionAppStoreRelease|BackgroundAssetVersionExternalBetaRelease|BackgroundAssetVersionInternalBetaRelease|BackgroundAsset>|Optional  $included
     */
    public function __construct(
        /** @var array<int, BackgroundAssetVersion> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, BackgroundAssetUploadFile|BackgroundAssetVersionAppStoreRelease|BackgroundAssetVersionExternalBetaRelease|BackgroundAssetVersionInternalBetaRelease|BackgroundAsset>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
