<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardV2createRequestDataRelationshipsGameCenterLeaderboardSets
 */
class GameCenterLeaderboardV2createRequestDataRelationshipsGameCenterLeaderboardSets extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardV2createRequestDataRelationshipsGameCenterLeaderboardSetsDataItem>|Optional  $data
     */
    public function __construct(
        /** @var array<int, GameCenterLeaderboardV2createRequestDataRelationshipsGameCenterLeaderboardSetsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
