<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseOfferCodeCustomCodesResponse
 */
class InAppPurchaseOfferCodeCustomCodesResponse extends SpatieData
{
    /**
     * @param  array<int, InAppPurchaseOfferCodeCustomCode>  $data
     * @param  array<int, Actor>|Optional  $included
     */
    public function __construct(
        /** @var array<int, InAppPurchaseOfferCodeCustomCode> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, Actor>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
