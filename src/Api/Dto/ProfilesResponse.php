<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ProfilesResponse
 */
class ProfilesResponse extends SpatieData
{
    /**
     * @param  array<int, Profile>  $data
     * @param  array<int, BundleId|Certificate|Device>|Optional  $included
     */
    public function __construct(
        /** @var array<int, Profile> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, BundleId|Certificate|Device>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
