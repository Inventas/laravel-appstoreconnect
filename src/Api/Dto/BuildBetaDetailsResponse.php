<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildBetaDetailsResponse
 */
class BuildBetaDetailsResponse extends SpatieData
{
    /**
     * @param  array<int, BuildBetaDetail>  $data
     * @param  array<int, Build>|Optional  $included
     */
    public function __construct(
        /** @var array<int, BuildBetaDetail> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, Build>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
