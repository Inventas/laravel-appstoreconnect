<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseOfferCodeCustomCodeCreateRequestDataAttributes
 */
class InAppPurchaseOfferCodeCustomCodeCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string $customCode,
        public int $numberOfCodes,
        public string|Optional|null $expirationDate = new Optional,
    ) {}
}
