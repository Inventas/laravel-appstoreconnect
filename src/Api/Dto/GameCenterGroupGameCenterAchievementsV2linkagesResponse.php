<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterGroupGameCenterAchievementsV2linkagesResponse
 */
class GameCenterGroupGameCenterAchievementsV2linkagesResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterGroupGameCenterAchievementsV2linkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterGroupGameCenterAchievementsV2linkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
