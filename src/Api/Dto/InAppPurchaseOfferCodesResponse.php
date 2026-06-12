<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseOfferCodesResponse
 */
class InAppPurchaseOfferCodesResponse extends SpatieData
{
    /**
     * @param  array<int, InAppPurchaseOfferCode>  $data
     * @param  array<int, InAppPurchaseOfferCodeCustomCode|InAppPurchaseOfferCodeOneTimeUseCode|InAppPurchaseOfferPrice>|Optional  $included
     */
    public function __construct(
        /** @var array<int, InAppPurchaseOfferCode> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, InAppPurchaseOfferCodeCustomCode|InAppPurchaseOfferCodeOneTimeUseCode|InAppPurchaseOfferPrice>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
