<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ProfileRelationshipsCertificates
 */
class ProfileRelationshipsCertificates extends SpatieData
{
    /**
     * @param  array<int, ProfileRelationshipsCertificatesDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, ProfileRelationshipsCertificatesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
