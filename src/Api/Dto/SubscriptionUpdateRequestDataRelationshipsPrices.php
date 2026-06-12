<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionUpdateRequestDataRelationshipsPrices
 */
class SubscriptionUpdateRequestDataRelationshipsPrices extends SpatieData
{
    /**
     * @param  array<int, SubscriptionUpdateRequestDataRelationshipsPricesDataItem>|Optional  $data
     */
    public function __construct(
        /** @var array<int, SubscriptionUpdateRequestDataRelationshipsPricesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
