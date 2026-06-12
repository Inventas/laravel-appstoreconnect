<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterActivityVersionCreateRequestDataRelationships
 */
class GameCenterActivityVersionCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public GameCenterActivityVersionCreateRequestDataRelationshipsActivity $activity,
    ) {}
}
