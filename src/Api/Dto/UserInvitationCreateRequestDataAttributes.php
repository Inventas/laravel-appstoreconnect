<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * UserInvitationCreateRequestDataAttributes
 */
class UserInvitationCreateRequestDataAttributes extends SpatieData
{
    /**
     * @param  array<int, UserRole>  $roles
     */
    public function __construct(
        public string $email,
        public string $firstName,
        public string $lastName,
        /** @var array<int, UserRole> */
        public array $roles,
        public bool|Optional|null $allAppsVisible = new Optional,
        public bool|Optional|null $provisioningAllowed = new Optional,
    ) {}
}
