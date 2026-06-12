<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * PreReleaseVersionsWithoutIncludesResponse
 */
class PreReleaseVersionsWithoutIncludesResponse extends SpatieData
{
    /**
     * @param  array<int, PrereleaseVersion>  $data
     */
    public function __construct(
        /** @var array<int, PrereleaseVersion> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
