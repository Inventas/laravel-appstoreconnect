<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetV2createRequestDataRelationshipsVersions
 */
class GameCenterLeaderboardSetV2createRequestDataRelationshipsVersions extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardSetV2createRequestDataRelationshipsVersionsDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterLeaderboardSetV2createRequestDataRelationshipsVersionsDataItem> */
        public array $data,
    ) {}
}
