<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppRelationshipsInAppPurchases
 */
class AppRelationshipsInAppPurchases extends SpatieData
{
    /**
     * @param  array<int, AppRelationshipsInAppPurchasesDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, AppRelationshipsInAppPurchasesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
