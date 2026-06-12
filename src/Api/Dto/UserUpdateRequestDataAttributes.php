<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * UserUpdateRequestDataAttributes
 */
class UserUpdateRequestDataAttributes extends SpatieData
{
    /**
     * @param  array<int, UserRole>|Optional|null  $roles
     */
    public function __construct(
        /** @var array<int, UserRole>|Optional|null */
        public array|Optional|null $roles = new Optional,
        public bool|Optional|null $allAppsVisible = new Optional,
        public bool|Optional|null $provisioningAllowed = new Optional,
    ) {}
}
