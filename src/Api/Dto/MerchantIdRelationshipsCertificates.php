<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * MerchantIdRelationshipsCertificates
 */
class MerchantIdRelationshipsCertificates extends SpatieData
{
    /**
     * @param  array<int, MerchantIdRelationshipsCertificatesDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, MerchantIdRelationshipsCertificatesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
