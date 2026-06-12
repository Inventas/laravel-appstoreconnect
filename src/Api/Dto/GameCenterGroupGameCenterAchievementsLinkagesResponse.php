<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterGroupGameCenterAchievementsLinkagesResponse
 */
class GameCenterGroupGameCenterAchievementsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterGroupGameCenterAchievementsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterGroupGameCenterAchievementsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
