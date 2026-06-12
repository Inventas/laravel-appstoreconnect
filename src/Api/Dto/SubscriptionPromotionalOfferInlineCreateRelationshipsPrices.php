<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPromotionalOfferInlineCreateRelationshipsPrices
 */
class SubscriptionPromotionalOfferInlineCreateRelationshipsPrices extends SpatieData
{
    /**
     * @param  array<int, SubscriptionPromotionalOfferInlineCreateRelationshipsPricesDataItem>|Optional  $data
     */
    public function __construct(
        /** @var array<int, SubscriptionPromotionalOfferInlineCreateRelationshipsPricesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
