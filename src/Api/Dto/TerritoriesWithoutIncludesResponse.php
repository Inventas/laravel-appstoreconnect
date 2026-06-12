<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * TerritoriesWithoutIncludesResponse
 */
class TerritoriesWithoutIncludesResponse extends SpatieData
{
    /**
     * @param  array<int, Territory>  $data
     */
    public function __construct(
        /** @var array<int, Territory> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
