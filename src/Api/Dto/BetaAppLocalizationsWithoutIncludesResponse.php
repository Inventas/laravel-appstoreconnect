<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaAppLocalizationsWithoutIncludesResponse
 */
class BetaAppLocalizationsWithoutIncludesResponse extends SpatieData
{
    /**
     * @param  array<int, BetaAppLocalization>  $data
     */
    public function __construct(
        /** @var array<int, BetaAppLocalization> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
