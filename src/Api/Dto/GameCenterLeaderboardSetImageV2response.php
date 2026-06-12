<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetImageV2Response
 */
class GameCenterLeaderboardSetImageV2response extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardSetLocalizationV2>|Optional  $included
     */
    public function __construct(
        public GameCenterLeaderboardSetImageV2 $data,
        public DocumentLinks $links,
        /** @var array<int, GameCenterLeaderboardSetLocalizationV2>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
