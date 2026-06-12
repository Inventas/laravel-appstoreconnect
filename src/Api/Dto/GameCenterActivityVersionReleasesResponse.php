<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterActivityVersionReleasesResponse
 */
class GameCenterActivityVersionReleasesResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterActivityVersionRelease>  $data
     * @param  array<int, GameCenterActivityVersion>|Optional  $included
     */
    public function __construct(
        /** @var array<int, GameCenterActivityVersionRelease> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, GameCenterActivityVersion>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
