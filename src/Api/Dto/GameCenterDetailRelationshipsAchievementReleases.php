<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterDetailRelationshipsAchievementReleases
 */
class GameCenterDetailRelationshipsAchievementReleases extends SpatieData
{
    /**
     * @param  array<int, GameCenterDetailRelationshipsAchievementReleasesDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, GameCenterDetailRelationshipsAchievementReleasesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
