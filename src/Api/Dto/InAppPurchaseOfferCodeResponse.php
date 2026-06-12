<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseOfferCodeResponse
 */
class InAppPurchaseOfferCodeResponse extends SpatieData
{
    /**
     * @param  array<int, InAppPurchaseOfferCodeCustomCode|InAppPurchaseOfferCodeOneTimeUseCode|InAppPurchaseOfferPrice>|Optional  $included
     */
    public function __construct(
        public InAppPurchaseOfferCode $data,
        public DocumentLinks $links,
        /** @var array<int, InAppPurchaseOfferCodeCustomCode|InAppPurchaseOfferCodeOneTimeUseCode|InAppPurchaseOfferPrice>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
