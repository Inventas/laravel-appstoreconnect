<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseV2relationshipsContent
 */
class InAppPurchaseV2relationshipsContent extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public InAppPurchaseV2relationshipsContentData|Optional $data = new Optional,
    ) {}
}
