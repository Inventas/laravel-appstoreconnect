<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * UserInvitationRelationshipsVisibleApps
 */
class UserInvitationRelationshipsVisibleApps extends SpatieData
{
    /**
     * @param  array<int, UserInvitationRelationshipsVisibleAppsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, UserInvitationRelationshipsVisibleAppsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
