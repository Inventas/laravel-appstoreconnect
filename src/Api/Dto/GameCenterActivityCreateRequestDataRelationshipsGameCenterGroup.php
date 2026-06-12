<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterActivityCreateRequestDataRelationshipsGameCenterGroup
 */
class GameCenterActivityCreateRequestDataRelationshipsGameCenterGroup extends SpatieData
{
    public function __construct(
        public GameCenterActivityCreateRequestDataRelationshipsGameCenterGroupData|Optional $data = new Optional,
    ) {}
}
