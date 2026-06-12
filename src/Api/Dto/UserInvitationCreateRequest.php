<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * UserInvitationCreateRequest
 */
class UserInvitationCreateRequest extends SpatieData
{
    public function __construct(
        public UserInvitationCreateRequestData $data,
    ) {}
}
