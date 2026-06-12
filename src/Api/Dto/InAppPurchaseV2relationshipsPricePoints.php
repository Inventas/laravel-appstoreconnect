<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseV2relationshipsPricePoints
 */
class InAppPurchaseV2relationshipsPricePoints extends SpatieData
{
    /**
     * @param  array<int, InAppPurchaseV2relationshipsPricePointsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, InAppPurchaseV2relationshipsPricePointsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
