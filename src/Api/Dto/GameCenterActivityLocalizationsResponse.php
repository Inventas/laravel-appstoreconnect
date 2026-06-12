<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterActivityLocalizationsResponse
 */
class GameCenterActivityLocalizationsResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterActivityLocalization>  $data
     * @param  array<int, GameCenterActivityImage|GameCenterActivityVersion>|Optional  $included
     */
    public function __construct(
        /** @var array<int, GameCenterActivityLocalization> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, GameCenterActivityImage|GameCenterActivityVersion>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
