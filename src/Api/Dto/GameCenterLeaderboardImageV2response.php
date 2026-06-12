<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardImageV2Response
 */
class GameCenterLeaderboardImageV2response extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardLocalizationV2>|Optional  $included
     */
    public function __construct(
        public GameCenterLeaderboardImageV2 $data,
        public DocumentLinks $links,
        /** @var array<int, GameCenterLeaderboardLocalizationV2>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
