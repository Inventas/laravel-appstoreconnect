<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AlternativeDistributionPackageVersionRelationshipsDeltas
 */
class AlternativeDistributionPackageVersionRelationshipsDeltas extends SpatieData
{
    /**
     * @param  array<int, AlternativeDistributionPackageVersionRelationshipsDeltasDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, AlternativeDistributionPackageVersionRelationshipsDeltasDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
