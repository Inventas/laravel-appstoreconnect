<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseOfferCodeCustomCodeUpdateRequestData
 */
class InAppPurchaseOfferCodeCustomCodeUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public InAppPurchaseOfferCodeCustomCodeUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
