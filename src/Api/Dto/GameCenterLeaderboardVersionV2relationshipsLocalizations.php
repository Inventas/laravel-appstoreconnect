<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardVersionV2relationshipsLocalizations
 */
class GameCenterLeaderboardVersionV2relationshipsLocalizations extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardVersionV2relationshipsLocalizationsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, GameCenterLeaderboardVersionV2relationshipsLocalizationsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
