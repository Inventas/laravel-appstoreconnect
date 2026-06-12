<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseV2createRequestDataRelationshipsApp
 */
class InAppPurchaseV2createRequestDataRelationshipsApp extends SpatieData
{
    public function __construct(
        public InAppPurchaseV2createRequestDataRelationshipsAppData $data,
    ) {}
}
