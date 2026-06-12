<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementV2versionsLinkagesResponse
 */
class GameCenterAchievementV2versionsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterAchievementV2versionsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterAchievementV2versionsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
