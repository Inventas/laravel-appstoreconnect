<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterEnabledVersionsResponse
 */
class GameCenterEnabledVersionsResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterEnabledVersion>  $data
     * @param  array<int, App|GameCenterEnabledVersion>|Optional  $included
     */
    public function __construct(
        /** @var array<int, GameCenterEnabledVersion> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, App|GameCenterEnabledVersion>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
