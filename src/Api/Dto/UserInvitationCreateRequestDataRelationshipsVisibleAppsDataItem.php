<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * UserInvitationCreateRequestDataRelationshipsVisibleAppsDataItem
 */
class UserInvitationCreateRequestDataRelationshipsVisibleAppsDataItem extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
