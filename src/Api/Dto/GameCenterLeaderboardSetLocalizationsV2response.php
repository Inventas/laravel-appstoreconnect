<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetLocalizationsV2Response
 */
class GameCenterLeaderboardSetLocalizationsV2response extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardSetLocalizationV2>  $data
     * @param  array<int, GameCenterLeaderboardSetImageV2|GameCenterLeaderboardSetVersionV2>|Optional  $included
     */
    public function __construct(
        /** @var array<int, GameCenterLeaderboardSetLocalizationV2> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, GameCenterLeaderboardSetImageV2|GameCenterLeaderboardSetVersionV2>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
