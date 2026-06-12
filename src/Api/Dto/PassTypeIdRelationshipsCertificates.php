<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * PassTypeIdRelationshipsCertificates
 */
class PassTypeIdRelationshipsCertificates extends SpatieData
{
    /**
     * @param  array<int, PassTypeIdRelationshipsCertificatesDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, PassTypeIdRelationshipsCertificatesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
