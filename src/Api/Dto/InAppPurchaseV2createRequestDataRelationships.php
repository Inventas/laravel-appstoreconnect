<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseV2createRequestDataRelationships
 */
class InAppPurchaseV2createRequestDataRelationships extends SpatieData
{
    public function __construct(
        public InAppPurchaseV2createRequestDataRelationshipsApp $app,
    ) {}
}
