<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardLocalizationsV2Response
 */
class GameCenterLeaderboardLocalizationsV2response extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardLocalizationV2>  $data
     * @param  array<int, GameCenterLeaderboardImageV2|GameCenterLeaderboardVersionV2>|Optional  $included
     */
    public function __construct(
        /** @var array<int, GameCenterLeaderboardLocalizationV2> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, GameCenterLeaderboardImageV2|GameCenterLeaderboardVersionV2>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
