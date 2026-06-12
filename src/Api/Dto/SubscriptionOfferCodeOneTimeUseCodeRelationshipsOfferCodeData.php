<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionOfferCodeOneTimeUseCodeRelationshipsOfferCodeData
 */
class SubscriptionOfferCodeOneTimeUseCodeRelationshipsOfferCodeData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
