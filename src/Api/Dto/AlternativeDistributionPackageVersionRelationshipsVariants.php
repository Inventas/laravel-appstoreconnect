<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AlternativeDistributionPackageVersionRelationshipsVariants
 */
class AlternativeDistributionPackageVersionRelationshipsVariants extends SpatieData
{
    /**
     * @param  array<int, AlternativeDistributionPackageVersionRelationshipsVariantsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, AlternativeDistributionPackageVersionRelationshipsVariantsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
