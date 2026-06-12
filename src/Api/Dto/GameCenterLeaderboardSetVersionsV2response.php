<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetVersionsV2Response
 */
class GameCenterLeaderboardSetVersionsV2response extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardSetVersionV2>  $data
     * @param  array<int, GameCenterLeaderboardSetLocalizationV2|GameCenterLeaderboardSetV2>|Optional  $included
     */
    public function __construct(
        /** @var array<int, GameCenterLeaderboardSetVersionV2> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, GameCenterLeaderboardSetLocalizationV2|GameCenterLeaderboardSetV2>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
