<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaBuildLocalizationsResponse
 */
class BetaBuildLocalizationsResponse extends SpatieData
{
    /**
     * @param  array<int, BetaBuildLocalization>  $data
     * @param  array<int, Build>|Optional  $included
     */
    public function __construct(
        /** @var array<int, BetaBuildLocalization> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, Build>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
