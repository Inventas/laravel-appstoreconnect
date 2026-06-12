<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseSubmissionRelationships
 */
class InAppPurchaseSubmissionRelationships extends SpatieData
{
    public function __construct(
        public InAppPurchaseSubmissionRelationshipsInAppPurchaseV2|Optional $inAppPurchaseV2 = new Optional,
    ) {}
}
