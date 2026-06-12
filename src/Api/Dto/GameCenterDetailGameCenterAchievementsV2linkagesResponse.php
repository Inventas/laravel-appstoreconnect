<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterDetailGameCenterAchievementsV2linkagesResponse
 */
class GameCenterDetailGameCenterAchievementsV2linkagesResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterDetailGameCenterAchievementsV2linkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterDetailGameCenterAchievementsV2linkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
