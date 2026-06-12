<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardV2Response
 */
class GameCenterLeaderboardV2response extends SpatieData
{
    /**
     * @param  array<int, GameCenterActivity|GameCenterChallenge|GameCenterDetail|GameCenterGroup|GameCenterLeaderboardSetV2|GameCenterLeaderboardVersionV2>|Optional  $included
     */
    public function __construct(
        public GameCenterLeaderboardV2 $data,
        public DocumentLinks $links,
        /** @var array<int, GameCenterActivity|GameCenterChallenge|GameCenterDetail|GameCenterGroup|GameCenterLeaderboardSetV2|GameCenterLeaderboardVersionV2>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
