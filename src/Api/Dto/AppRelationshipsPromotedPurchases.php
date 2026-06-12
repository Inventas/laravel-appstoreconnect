<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppRelationshipsPromotedPurchases
 */
class AppRelationshipsPromotedPurchases extends SpatieData
{
    /**
     * @param  array<int, AppRelationshipsPromotedPurchasesDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, AppRelationshipsPromotedPurchasesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
