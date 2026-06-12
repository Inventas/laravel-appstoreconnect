<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildsWithoutIncludesResponse
 */
class BuildsWithoutIncludesResponse extends SpatieData
{
    /**
     * @param  array<int, Build>  $data
     */
    public function __construct(
        /** @var array<int, Build> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
