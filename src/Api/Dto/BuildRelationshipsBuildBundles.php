<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildRelationshipsBuildBundles
 */
class BuildRelationshipsBuildBundles extends SpatieData
{
    /**
     * @param  array<int, BuildRelationshipsBuildBundlesDataItem>|Optional  $data
     */
    public function __construct(
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, BuildRelationshipsBuildBundlesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
