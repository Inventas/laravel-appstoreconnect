<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * UserInvitationCreateRequestDataRelationships
 */
class UserInvitationCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public UserInvitationCreateRequestDataRelationshipsVisibleApps|Optional $visibleApps = new Optional,
    ) {}
}
