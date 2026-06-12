<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BackgroundAssetVersionBackgroundAssetUploadFilesLinkagesResponse
 */
class BackgroundAssetVersionBackgroundAssetUploadFilesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, BackgroundAssetVersionBackgroundAssetUploadFilesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, BackgroundAssetVersionBackgroundAssetUploadFilesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
