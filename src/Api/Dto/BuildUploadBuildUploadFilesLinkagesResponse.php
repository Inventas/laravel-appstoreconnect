<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildUploadBuildUploadFilesLinkagesResponse
 */
class BuildUploadBuildUploadFilesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, BuildUploadBuildUploadFilesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, BuildUploadBuildUploadFilesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
