<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * UserInvitationVisibleAppsLinkagesResponse
 */
class UserInvitationVisibleAppsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, UserInvitationVisibleAppsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, UserInvitationVisibleAppsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
