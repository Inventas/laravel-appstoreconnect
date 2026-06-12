<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPreviewsResponse
 */
class AppPreviewsResponse extends SpatieData
{
    /**
     * @param  array<int, AppPreview>  $data
     * @param  array<int, AppPreviewSet>|Optional  $included
     */
    public function __construct(
        /** @var array<int, AppPreview> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, AppPreviewSet>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
