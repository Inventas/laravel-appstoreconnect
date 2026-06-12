<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * WinBackOfferRelationshipsPrices
 */
class WinBackOfferRelationshipsPrices extends SpatieData
{
    /**
     * @param  array<int, WinBackOfferRelationshipsPricesDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, WinBackOfferRelationshipsPricesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
