<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * UserInvitationCreateRequestData
 */
class UserInvitationCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public UserInvitationCreateRequestDataAttributes $attributes,
        public UserInvitationCreateRequestDataRelationships|Optional $relationships = new Optional,
    ) {}
}
