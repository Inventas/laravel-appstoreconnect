<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * UsersResponse
 */
class UsersResponse extends SpatieData
{
    /**
     * @param  array<int, User>  $data
     * @param  array<int, App>|Optional  $included
     */
    public function __construct(
        /** @var array<int, User> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, App>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
