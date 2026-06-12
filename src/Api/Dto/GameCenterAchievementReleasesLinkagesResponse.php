<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementReleasesLinkagesResponse
 */
class GameCenterAchievementReleasesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterAchievementReleasesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterAchievementReleasesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
