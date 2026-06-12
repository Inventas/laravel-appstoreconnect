<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionOfferCodeOneTimeUseCode
 */
class SubscriptionOfferCodeOneTimeUseCode extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public SubscriptionOfferCodeOneTimeUseCodeAttributes|Optional $attributes = new Optional,
        public SubscriptionOfferCodeOneTimeUseCodeRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
