<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAppVersionCreateRequestData
 */
class GameCenterAppVersionCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public GameCenterAppVersionCreateRequestDataRelationships $relationships,
    ) {}
}
