<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetV2Response
 */
class GameCenterLeaderboardSetV2response extends SpatieData
{
    /**
     * @param  array<int, GameCenterDetail|GameCenterGroup|GameCenterLeaderboardSetVersionV2|GameCenterLeaderboardV2>|Optional  $included
     */
    public function __construct(
        public GameCenterLeaderboardSetV2 $data,
        public DocumentLinks $links,
        /** @var array<int, GameCenterDetail|GameCenterGroup|GameCenterLeaderboardSetVersionV2|GameCenterLeaderboardV2>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
