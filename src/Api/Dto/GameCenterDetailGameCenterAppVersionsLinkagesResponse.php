<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterDetailGameCenterAppVersionsLinkagesResponse
 */
class GameCenterDetailGameCenterAppVersionsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterDetailGameCenterAppVersionsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterDetailGameCenterAppVersionsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
