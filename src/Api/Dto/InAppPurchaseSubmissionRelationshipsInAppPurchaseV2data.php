<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseSubmissionRelationshipsInAppPurchaseV2data
 */
class InAppPurchaseSubmissionRelationshipsInAppPurchaseV2data extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
