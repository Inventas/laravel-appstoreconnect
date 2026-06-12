<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildUploadsResponse
 */
class BuildUploadsResponse extends SpatieData
{
    /**
     * @param  array<int, BuildUpload>  $data
     * @param  array<int, BuildUploadFile|Build>|Optional  $included
     */
    public function __construct(
        /** @var array<int, BuildUpload> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, BuildUploadFile|Build>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
