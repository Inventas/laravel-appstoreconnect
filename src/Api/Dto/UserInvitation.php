<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * UserInvitation
 */
class UserInvitation extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public UserInvitationAttributes|Optional $attributes = new Optional,
        public UserInvitationRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
