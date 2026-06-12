<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaTestersWithoutIncludesResponse
 */
class BetaTestersWithoutIncludesResponse extends SpatieData
{
    /**
     * @param  array<int, BetaTester>  $data
     */
    public function __construct(
        /** @var array<int, BetaTester> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
