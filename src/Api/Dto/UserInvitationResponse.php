<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * UserInvitationResponse
 */
class UserInvitationResponse extends SpatieData
{
    /**
     * @param  array<int, App>|Optional  $included
     */
    public function __construct(
        public UserInvitation $data,
        public DocumentLinks $links,
        /** @var array<int, App>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
