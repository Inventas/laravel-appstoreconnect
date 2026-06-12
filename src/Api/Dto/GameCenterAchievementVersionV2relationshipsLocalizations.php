<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementVersionV2relationshipsLocalizations
 */
class GameCenterAchievementVersionV2relationshipsLocalizations extends SpatieData
{
    /**
     * @param  array<int, GameCenterAchievementVersionV2relationshipsLocalizationsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, GameCenterAchievementVersionV2relationshipsLocalizationsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
