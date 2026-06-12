<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardsV2Response
 */
class GameCenterLeaderboardsV2response extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardV2>  $data
     * @param  array<int, GameCenterActivity|GameCenterChallenge|GameCenterDetail|GameCenterGroup|GameCenterLeaderboardSetV2|GameCenterLeaderboardVersionV2>|Optional  $included
     */
    public function __construct(
        /** @var array<int, GameCenterLeaderboardV2> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, GameCenterActivity|GameCenterChallenge|GameCenterDetail|GameCenterGroup|GameCenterLeaderboardSetV2|GameCenterLeaderboardVersionV2>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
