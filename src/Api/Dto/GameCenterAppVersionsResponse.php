<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAppVersionsResponse
 */
class GameCenterAppVersionsResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterAppVersion>  $data
     * @param  array<int, AppStoreVersion|GameCenterAppVersion>|Optional  $included
     */
    public function __construct(
        /** @var array<int, GameCenterAppVersion> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, AppStoreVersion|GameCenterAppVersion>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
