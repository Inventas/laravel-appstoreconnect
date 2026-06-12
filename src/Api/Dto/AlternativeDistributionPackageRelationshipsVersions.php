<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AlternativeDistributionPackageRelationshipsVersions
 */
class AlternativeDistributionPackageRelationshipsVersions extends SpatieData
{
    /**
     * @param  array<int, AlternativeDistributionPackageRelationshipsVersionsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, AlternativeDistributionPackageRelationshipsVersionsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
