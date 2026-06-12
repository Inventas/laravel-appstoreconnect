<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseOfferCodeRelationshipsOneTimeUseCodes
 */
class InAppPurchaseOfferCodeRelationshipsOneTimeUseCodes extends SpatieData
{
    /**
     * @param  array<int, InAppPurchaseOfferCodeRelationshipsOneTimeUseCodesDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, InAppPurchaseOfferCodeRelationshipsOneTimeUseCodesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
