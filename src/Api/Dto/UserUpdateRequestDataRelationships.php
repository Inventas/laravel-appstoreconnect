<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * UserUpdateRequestDataRelationships
 */
class UserUpdateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public UserUpdateRequestDataRelationshipsVisibleApps|Optional $visibleApps = new Optional,
    ) {}
}
