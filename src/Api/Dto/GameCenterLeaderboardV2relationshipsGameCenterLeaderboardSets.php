<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardV2relationshipsGameCenterLeaderboardSets
 */
class GameCenterLeaderboardV2relationshipsGameCenterLeaderboardSets extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardV2relationshipsGameCenterLeaderboardSetsDataItem>|Optional  $data
     */
    public function __construct(
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, GameCenterLeaderboardV2relationshipsGameCenterLeaderboardSetsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
