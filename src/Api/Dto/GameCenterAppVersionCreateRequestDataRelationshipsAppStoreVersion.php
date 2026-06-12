<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAppVersionCreateRequestDataRelationshipsAppStoreVersion
 */
class GameCenterAppVersionCreateRequestDataRelationshipsAppStoreVersion extends SpatieData
{
    public function __construct(
        public GameCenterAppVersionCreateRequestDataRelationshipsAppStoreVersionData $data,
    ) {}
}
