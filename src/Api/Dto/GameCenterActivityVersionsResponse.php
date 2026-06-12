<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterActivityVersionsResponse
 */
class GameCenterActivityVersionsResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterActivityVersion>  $data
     * @param  array<int, GameCenterActivity|GameCenterActivityImage|GameCenterActivityLocalization|GameCenterActivityVersionRelease>|Optional  $included
     */
    public function __construct(
        /** @var array<int, GameCenterActivityVersion> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, GameCenterActivity|GameCenterActivityImage|GameCenterActivityLocalization|GameCenterActivityVersionRelease>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
