<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementVersionV2localizationsLinkagesResponse
 */
class GameCenterAchievementVersionV2localizationsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterAchievementVersionV2localizationsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterAchievementVersionV2localizationsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
