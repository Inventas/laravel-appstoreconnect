<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardVersionV2Response
 */
class GameCenterLeaderboardVersionV2response extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardLocalizationV2|GameCenterLeaderboardV2>|Optional  $included
     */
    public function __construct(
        public GameCenterLeaderboardVersionV2 $data,
        public DocumentLinks $links,
        /** @var array<int, GameCenterLeaderboardLocalizationV2|GameCenterLeaderboardV2>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
