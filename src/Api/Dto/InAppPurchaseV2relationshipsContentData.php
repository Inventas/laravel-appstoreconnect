<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseV2relationshipsContentData
 */
class InAppPurchaseV2relationshipsContentData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
