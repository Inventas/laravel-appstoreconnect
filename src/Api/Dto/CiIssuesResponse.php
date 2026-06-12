<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiIssuesResponse
 */
class CiIssuesResponse extends SpatieData
{
    /**
     * @param  array<int, CiIssue>  $data
     */
    public function __construct(
        /** @var array<int, CiIssue> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
