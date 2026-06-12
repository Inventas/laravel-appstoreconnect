<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardLocalizationV2Response
 */
class GameCenterLeaderboardLocalizationV2response extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardImageV2|GameCenterLeaderboardVersionV2>|Optional  $included
     */
    public function __construct(
        public GameCenterLeaderboardLocalizationV2 $data,
        public DocumentLinks $links,
        /** @var array<int, GameCenterLeaderboardImageV2|GameCenterLeaderboardVersionV2>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
