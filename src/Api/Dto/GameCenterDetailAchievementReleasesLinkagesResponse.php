<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterDetailAchievementReleasesLinkagesResponse
 */
class GameCenterDetailAchievementReleasesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterDetailAchievementReleasesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterDetailAchievementReleasesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
