<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * PreReleaseVersionsResponse
 */
class PreReleaseVersionsResponse extends SpatieData
{
    /**
     * @param  array<int, PrereleaseVersion>  $data
     * @param  array<int, App|Build>|Optional  $included
     */
    public function __construct(
        /** @var array<int, PrereleaseVersion> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, App|Build>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
