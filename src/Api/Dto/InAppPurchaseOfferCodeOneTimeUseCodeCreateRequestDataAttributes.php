<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseOfferCodeOneTimeUseCodeCreateRequestDataAttributes
 */
class InAppPurchaseOfferCodeOneTimeUseCodeCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public int $numberOfCodes,
        public string $expirationDate,
        public OfferCodeEnvironment|Optional $environment = new Optional,
    ) {}
}
