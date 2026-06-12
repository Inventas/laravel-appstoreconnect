<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementLocalizationsLinkagesResponse
 */
class GameCenterAchievementLocalizationsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterAchievementLocalizationsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterAchievementLocalizationsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
