<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseOfferCodeRelationships
 */
class InAppPurchaseOfferCodeRelationships extends SpatieData
{
    public function __construct(
        public InAppPurchaseOfferCodeRelationshipsOneTimeUseCodes|Optional $oneTimeUseCodes = new Optional,
        public InAppPurchaseOfferCodeRelationshipsCustomCodes|Optional $customCodes = new Optional,
        public InAppPurchaseOfferCodeRelationshipsPrices|Optional $prices = new Optional,
    ) {}
}
