<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardRelationshipsReleases
 */
class GameCenterLeaderboardRelationshipsReleases extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardRelationshipsReleasesDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, GameCenterLeaderboardRelationshipsReleasesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
