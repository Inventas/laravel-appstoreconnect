<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseSubmissionRelationshipsInAppPurchaseV2
 */
class InAppPurchaseSubmissionRelationshipsInAppPurchaseV2 extends SpatieData
{
    public function __construct(
        public InAppPurchaseSubmissionRelationshipsInAppPurchaseV2data|Optional $data = new Optional,
    ) {}
}
