<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppTagsResponse
 */
class AppTagsResponse extends SpatieData
{
    /**
     * @param  array<int, AppTag>  $data
     * @param  array<int, Territory>|Optional  $included
     */
    public function __construct(
        /** @var array<int, AppTag> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, Territory>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
