<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementV2relationshipsVersions
 */
class GameCenterAchievementV2relationshipsVersions extends SpatieData
{
    /**
     * @param  array<int, GameCenterAchievementV2relationshipsVersionsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, GameCenterAchievementV2relationshipsVersionsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
