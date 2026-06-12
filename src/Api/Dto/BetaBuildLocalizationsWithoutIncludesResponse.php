<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaBuildLocalizationsWithoutIncludesResponse
 */
class BetaBuildLocalizationsWithoutIncludesResponse extends SpatieData
{
    /**
     * @param  array<int, BetaBuildLocalization>  $data
     */
    public function __construct(
        /** @var array<int, BetaBuildLocalization> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
