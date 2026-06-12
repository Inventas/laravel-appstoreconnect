<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseSubmissionCreateRequestDataRelationships
 */
class InAppPurchaseSubmissionCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public InAppPurchaseSubmissionCreateRequestDataRelationshipsInAppPurchaseV2 $inAppPurchaseV2,
    ) {}
}
