<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppsWithoutIncludesResponse
 */
class AppsWithoutIncludesResponse extends SpatieData
{
    /**
     * @param  array<int, App>  $data
     */
    public function __construct(
        /** @var array<int, App> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
