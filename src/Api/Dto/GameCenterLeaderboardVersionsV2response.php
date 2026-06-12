<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardVersionsV2Response
 */
class GameCenterLeaderboardVersionsV2response extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardVersionV2>  $data
     * @param  array<int, GameCenterLeaderboardLocalizationV2|GameCenterLeaderboardV2>|Optional  $included
     */
    public function __construct(
        /** @var array<int, GameCenterLeaderboardVersionV2> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, GameCenterLeaderboardLocalizationV2|GameCenterLeaderboardV2>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
