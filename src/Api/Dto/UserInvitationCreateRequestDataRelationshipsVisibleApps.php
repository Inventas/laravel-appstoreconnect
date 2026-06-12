<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * UserInvitationCreateRequestDataRelationshipsVisibleApps
 */
class UserInvitationCreateRequestDataRelationshipsVisibleApps extends SpatieData
{
    /**
     * @param  array<int, UserInvitationCreateRequestDataRelationshipsVisibleAppsDataItem>|Optional  $data
     */
    public function __construct(
        /** @var array<int, UserInvitationCreateRequestDataRelationshipsVisibleAppsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
