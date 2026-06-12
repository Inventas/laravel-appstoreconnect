<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseSubmissionCreateRequestData
 */
class InAppPurchaseSubmissionCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public InAppPurchaseSubmissionCreateRequestDataRelationships $relationships,
    ) {}
}
