<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaTestersResponse
 */
class BetaTestersResponse extends SpatieData
{
    /**
     * @param  array<int, BetaTester>  $data
     * @param  array<int, App|BetaGroup|Build>|Optional  $included
     */
    public function __construct(
        /** @var array<int, BetaTester> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, App|BetaGroup|Build>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
