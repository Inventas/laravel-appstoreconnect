<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterActivityRelationshipsGameCenterGroup
 */
class GameCenterActivityRelationshipsGameCenterGroup extends SpatieData
{
    public function __construct(
        public GameCenterActivityRelationshipsGameCenterGroupData|Optional $data = new Optional,
    ) {}
}
