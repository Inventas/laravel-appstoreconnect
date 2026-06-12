<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseOfferCodeUpdateRequestData
 */
class InAppPurchaseOfferCodeUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public InAppPurchaseOfferCodeUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
