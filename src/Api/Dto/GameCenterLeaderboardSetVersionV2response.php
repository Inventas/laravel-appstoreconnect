<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetVersionV2Response
 */
class GameCenterLeaderboardSetVersionV2response extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardSetLocalizationV2|GameCenterLeaderboardSetV2>|Optional  $included
     */
    public function __construct(
        public GameCenterLeaderboardSetVersionV2 $data,
        public DocumentLinks $links,
        /** @var array<int, GameCenterLeaderboardSetLocalizationV2|GameCenterLeaderboardSetV2>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
