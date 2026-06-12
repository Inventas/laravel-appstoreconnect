<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * UserInvitationsResponse
 */
class UserInvitationsResponse extends SpatieData
{
    /**
     * @param  array<int, UserInvitation>  $data
     * @param  array<int, App>|Optional  $included
     */
    public function __construct(
        /** @var array<int, UserInvitation> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, App>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
