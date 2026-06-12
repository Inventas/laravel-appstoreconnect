<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAppVersionCreateRequestDataRelationships
 */
class GameCenterAppVersionCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public GameCenterAppVersionCreateRequestDataRelationshipsAppStoreVersion $appStoreVersion,
    ) {}
}
