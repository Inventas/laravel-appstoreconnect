<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * UserRelationships
 */
class UserRelationships extends SpatieData
{
    public function __construct(
        public UserRelationshipsVisibleApps|Optional $visibleApps = new Optional,
    ) {}
}
