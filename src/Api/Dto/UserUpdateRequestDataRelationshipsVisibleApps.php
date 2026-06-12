<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * UserUpdateRequestDataRelationshipsVisibleApps
 */
class UserUpdateRequestDataRelationshipsVisibleApps extends SpatieData
{
    /**
     * @param  array<int, UserUpdateRequestDataRelationshipsVisibleAppsDataItem>|Optional  $data
     */
    public function __construct(
        /** @var array<int, UserUpdateRequestDataRelationshipsVisibleAppsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
