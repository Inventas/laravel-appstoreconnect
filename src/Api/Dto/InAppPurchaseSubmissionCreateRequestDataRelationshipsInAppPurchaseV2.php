<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseSubmissionCreateRequestDataRelationshipsInAppPurchaseV2
 */
class InAppPurchaseSubmissionCreateRequestDataRelationshipsInAppPurchaseV2 extends SpatieData
{
    public function __construct(
        public InAppPurchaseSubmissionCreateRequestDataRelationshipsInAppPurchaseV2data $data,
    ) {}
}
