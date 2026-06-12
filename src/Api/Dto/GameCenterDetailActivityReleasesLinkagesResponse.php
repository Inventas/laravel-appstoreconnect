<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterDetailActivityReleasesLinkagesResponse
 */
class GameCenterDetailActivityReleasesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterDetailActivityReleasesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterDetailActivityReleasesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
