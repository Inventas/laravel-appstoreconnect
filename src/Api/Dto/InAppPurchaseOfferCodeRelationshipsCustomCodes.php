<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseOfferCodeRelationshipsCustomCodes
 */
class InAppPurchaseOfferCodeRelationshipsCustomCodes extends SpatieData
{
    /**
     * @param  array<int, InAppPurchaseOfferCodeRelationshipsCustomCodesDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, InAppPurchaseOfferCodeRelationshipsCustomCodesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
