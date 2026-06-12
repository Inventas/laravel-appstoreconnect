<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppRelationshipsInAppPurchasesV2
 */
class AppRelationshipsInAppPurchasesV2 extends SpatieData
{
    /**
     * @param  array<int, AppRelationshipsInAppPurchasesV2dataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, AppRelationshipsInAppPurchasesV2dataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
