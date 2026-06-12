<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiGitUser
 */
class CiGitUser extends SpatieData
{
    public function __construct(
        public string|Optional $displayName = new Optional,
        public string|Optional $avatarUrl = new Optional,
    ) {}
}
