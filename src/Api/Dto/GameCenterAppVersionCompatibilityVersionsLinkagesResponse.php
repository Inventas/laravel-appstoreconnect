<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAppVersionCompatibilityVersionsLinkagesResponse
 */
class GameCenterAppVersionCompatibilityVersionsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterAppVersionCompatibilityVersionsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterAppVersionCompatibilityVersionsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
