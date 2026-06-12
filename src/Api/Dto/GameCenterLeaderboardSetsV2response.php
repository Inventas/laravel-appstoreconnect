<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetsV2Response
 */
class GameCenterLeaderboardSetsV2response extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardSetV2>  $data
     * @param  array<int, GameCenterDetail|GameCenterGroup|GameCenterLeaderboardSetVersionV2|GameCenterLeaderboardV2>|Optional  $included
     */
    public function __construct(
        /** @var array<int, GameCenterLeaderboardSetV2> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, GameCenterDetail|GameCenterGroup|GameCenterLeaderboardSetVersionV2|GameCenterLeaderboardV2>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
