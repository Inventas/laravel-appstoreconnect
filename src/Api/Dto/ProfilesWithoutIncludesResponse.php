<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ProfilesWithoutIncludesResponse
 */
class ProfilesWithoutIncludesResponse extends SpatieData
{
    /**
     * @param  array<int, Profile>  $data
     */
    public function __construct(
        /** @var array<int, Profile> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
