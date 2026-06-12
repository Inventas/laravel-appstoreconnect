<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterDetailGameCenterActivitiesLinkagesResponse
 */
class GameCenterDetailGameCenterActivitiesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterDetailGameCenterActivitiesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterDetailGameCenterActivitiesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
