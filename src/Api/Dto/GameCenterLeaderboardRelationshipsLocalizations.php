<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardRelationshipsLocalizations
 */
class GameCenterLeaderboardRelationshipsLocalizations extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardRelationshipsLocalizationsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, GameCenterLeaderboardRelationshipsLocalizationsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
