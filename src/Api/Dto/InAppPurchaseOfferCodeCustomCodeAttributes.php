<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseOfferCodeCustomCodeAttributes
 */
class InAppPurchaseOfferCodeCustomCodeAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $customCode = new Optional,
        public int|Optional $numberOfCodes = new Optional,
        public string|Optional $createdDate = new Optional,
        public string|Optional $expirationDate = new Optional,
        public bool|Optional $active = new Optional,
    ) {}
}
