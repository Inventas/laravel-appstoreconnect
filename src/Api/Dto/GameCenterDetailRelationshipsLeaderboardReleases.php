<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterDetailRelationshipsLeaderboardReleases
 */
class GameCenterDetailRelationshipsLeaderboardReleases extends SpatieData
{
    /**
     * @param  array<int, GameCenterDetailRelationshipsLeaderboardReleasesDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, GameCenterDetailRelationshipsLeaderboardReleasesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
