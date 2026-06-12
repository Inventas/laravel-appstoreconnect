<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * UserUpdateRequestDataRelationshipsVisibleAppsDataItem
 */
class UserUpdateRequestDataRelationshipsVisibleAppsDataItem extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
