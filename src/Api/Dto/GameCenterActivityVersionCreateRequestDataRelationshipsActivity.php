<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterActivityVersionCreateRequestDataRelationshipsActivity
 */
class GameCenterActivityVersionCreateRequestDataRelationshipsActivity extends SpatieData
{
    public function __construct(
        public GameCenterActivityVersionCreateRequestDataRelationshipsActivityData $data,
    ) {}
}
