<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildBundleRelationshipsBuildBundleFileSizes
 */
class BuildBundleRelationshipsBuildBundleFileSizes extends SpatieData
{
    /**
     * @param  array<int, BuildBundleRelationshipsBuildBundleFileSizesDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, BuildBundleRelationshipsBuildBundleFileSizesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
