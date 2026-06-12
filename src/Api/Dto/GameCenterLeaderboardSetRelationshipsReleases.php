<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetRelationshipsReleases
 */
class GameCenterLeaderboardSetRelationshipsReleases extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardSetRelationshipsReleasesDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, GameCenterLeaderboardSetRelationshipsReleasesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
