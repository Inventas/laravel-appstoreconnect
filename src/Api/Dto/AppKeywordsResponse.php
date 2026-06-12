<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppKeywordsResponse
 */
class AppKeywordsResponse extends SpatieData
{
    /**
     * @param  array<int, AppKeyword>  $data
     */
    public function __construct(
        /** @var array<int, AppKeyword> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
