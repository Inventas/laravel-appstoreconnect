<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterDetailResponse
 */
class GameCenterDetailResponse extends SpatieData
{
    /**
     * @param  array<int, AppStoreVersion|App|GameCenterAchievementRelease|GameCenterAchievement|GameCenterActivity|GameCenterActivityVersionRelease|GameCenterAppVersion|GameCenterChallengeVersionRelease|GameCenterChallenge|GameCenterGroup|GameCenterLeaderboardRelease|GameCenterLeaderboardSetRelease|GameCenterLeaderboardSet|GameCenterLeaderboard>|Optional  $included
     */
    public function __construct(
        public GameCenterDetail $data,
        public DocumentLinks $links,
        /** @var array<int, AppStoreVersion|App|GameCenterAchievementRelease|GameCenterAchievement|GameCenterActivity|GameCenterActivityVersionRelease|GameCenterAppVersion|GameCenterChallengeVersionRelease|GameCenterChallenge|GameCenterGroup|GameCenterLeaderboardRelease|GameCenterLeaderboardSetRelease|GameCenterLeaderboardSet|GameCenterLeaderboard>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
