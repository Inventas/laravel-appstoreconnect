<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * UserInvitationRelationships
 */
class UserInvitationRelationships extends SpatieData
{
    public function __construct(
        public UserInvitationRelationshipsVisibleApps|Optional $visibleApps = new Optional,
    ) {}
}
