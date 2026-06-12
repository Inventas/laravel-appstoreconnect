<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BackgroundAssetUploadFilesResponse
 */
class BackgroundAssetUploadFilesResponse extends SpatieData
{
    /**
     * @param  array<int, BackgroundAssetUploadFile>  $data
     */
    public function __construct(
        /** @var array<int, BackgroundAssetUploadFile> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
