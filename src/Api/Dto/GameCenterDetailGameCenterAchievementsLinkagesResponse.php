<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterDetailGameCenterAchievementsLinkagesResponse
 */
class GameCenterDetailGameCenterAchievementsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterDetailGameCenterAchievementsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterDetailGameCenterAchievementsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
