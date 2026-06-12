<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildUploadFilesResponse
 */
class BuildUploadFilesResponse extends SpatieData
{
    /**
     * @param  array<int, BuildUploadFile>  $data
     */
    public function __construct(
        /** @var array<int, BuildUploadFile> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
