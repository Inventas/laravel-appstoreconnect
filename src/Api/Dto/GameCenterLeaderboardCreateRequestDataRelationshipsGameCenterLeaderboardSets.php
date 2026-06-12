<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardCreateRequestDataRelationshipsGameCenterLeaderboardSets
 */
class GameCenterLeaderboardCreateRequestDataRelationshipsGameCenterLeaderboardSets extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardCreateRequestDataRelationshipsGameCenterLeaderboardSetsDataItem>|Optional  $data
     */
    public function __construct(
        /** @var array<int, GameCenterLeaderboardCreateRequestDataRelationshipsGameCenterLeaderboardSetsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
