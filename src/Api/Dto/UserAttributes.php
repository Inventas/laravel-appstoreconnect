<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * UserAttributes
 */
class UserAttributes extends SpatieData
{
    /**
     * @param  array<int, UserRole>|Optional  $roles
     */
    public function __construct(
        public string|Optional $username = new Optional,
        public string|Optional $firstName = new Optional,
        public string|Optional $lastName = new Optional,
        /** @var array<int, UserRole>|Optional */
        public array|Optional $roles = new Optional,
        public bool|Optional $allAppsVisible = new Optional,
        public bool|Optional $provisioningAllowed = new Optional,
    ) {}
}
