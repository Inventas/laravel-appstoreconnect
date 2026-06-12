<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseOfferCodeOneTimeUseCode
 */
class InAppPurchaseOfferCodeOneTimeUseCode extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public InAppPurchaseOfferCodeOneTimeUseCodeAttributes|Optional $attributes = new Optional,
        public InAppPurchaseOfferCodeOneTimeUseCodeRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
