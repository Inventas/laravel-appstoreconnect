<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BundleIdCapabilitiesResponse
 */
class BundleIdCapabilitiesResponse extends SpatieData
{
    /**
     * @param  array<int, BundleIdCapability>  $data
     */
    public function __construct(
        /** @var array<int, BundleIdCapability> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
