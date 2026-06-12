<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterActivityVersionsLinkagesResponse
 */
class GameCenterActivityVersionsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterActivityVersionsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterActivityVersionsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
