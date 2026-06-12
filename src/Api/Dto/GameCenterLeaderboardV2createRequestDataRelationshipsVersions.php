<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardV2createRequestDataRelationshipsVersions
 */
class GameCenterLeaderboardV2createRequestDataRelationshipsVersions extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardV2createRequestDataRelationshipsVersionsDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterLeaderboardV2createRequestDataRelationshipsVersionsDataItem> */
        public array $data,
    ) {}
}
