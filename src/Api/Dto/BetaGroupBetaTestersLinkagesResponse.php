<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaGroupBetaTestersLinkagesResponse
 */
class BetaGroupBetaTestersLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, BetaGroupBetaTestersLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, BetaGroupBetaTestersLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
