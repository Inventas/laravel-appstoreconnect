<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaGroupsWithoutIncludesResponse
 */
class BetaGroupsWithoutIncludesResponse extends SpatieData
{
    /**
     * @param  array<int, BetaGroup>  $data
     */
    public function __construct(
        /** @var array<int, BetaGroup> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
