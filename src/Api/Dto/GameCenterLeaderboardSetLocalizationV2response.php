<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetLocalizationV2Response
 */
class GameCenterLeaderboardSetLocalizationV2response extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardSetImageV2|GameCenterLeaderboardSetVersionV2>|Optional  $included
     */
    public function __construct(
        public GameCenterLeaderboardSetLocalizationV2 $data,
        public DocumentLinks $links,
        /** @var array<int, GameCenterLeaderboardSetImageV2|GameCenterLeaderboardSetVersionV2>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
