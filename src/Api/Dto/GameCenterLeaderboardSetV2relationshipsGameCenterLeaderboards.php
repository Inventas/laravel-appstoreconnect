<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetV2relationshipsGameCenterLeaderboards
 */
class GameCenterLeaderboardSetV2relationshipsGameCenterLeaderboards extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardSetV2relationshipsGameCenterLeaderboardsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, GameCenterLeaderboardSetV2relationshipsGameCenterLeaderboardsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
