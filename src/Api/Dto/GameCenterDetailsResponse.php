<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterDetailsResponse
 */
class GameCenterDetailsResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterDetail>  $data
     * @param  array<int, AppStoreVersion|App|GameCenterAchievementRelease|GameCenterAchievement|GameCenterActivity|GameCenterActivityVersionRelease|GameCenterAppVersion|GameCenterChallengeVersionRelease|GameCenterChallenge|GameCenterGroup|GameCenterLeaderboardRelease|GameCenterLeaderboardSetRelease|GameCenterLeaderboardSet|GameCenterLeaderboard>|Optional  $included
     */
    public function __construct(
        /** @var array<int, GameCenterDetail> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, AppStoreVersion|App|GameCenterAchievementRelease|GameCenterAchievement|GameCenterActivity|GameCenterActivityVersionRelease|GameCenterAppVersion|GameCenterChallengeVersionRelease|GameCenterChallenge|GameCenterGroup|GameCenterLeaderboardRelease|GameCenterLeaderboardSetRelease|GameCenterLeaderboardSet|GameCenterLeaderboard>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
