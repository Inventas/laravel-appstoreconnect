<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetLocalizationsResponse
 */
class GameCenterLeaderboardSetLocalizationsResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardSetLocalization>  $data
     * @param  array<int, GameCenterLeaderboardSetImage|GameCenterLeaderboardSet>|Optional  $included
     */
    public function __construct(
        /** @var array<int, GameCenterLeaderboardSetLocalization> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, GameCenterLeaderboardSetImage|GameCenterLeaderboardSet>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
