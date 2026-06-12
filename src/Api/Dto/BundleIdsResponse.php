<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BundleIdsResponse
 */
class BundleIdsResponse extends SpatieData
{
    /**
     * @param  array<int, BundleId>  $data
     * @param  array<int, App|BundleIdCapability|Profile>|Optional  $included
     */
    public function __construct(
        /** @var array<int, BundleId> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, App|BundleIdCapability|Profile>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
