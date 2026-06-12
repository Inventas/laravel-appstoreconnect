<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BundleIdRelationshipsBundleIdCapabilities
 */
class BundleIdRelationshipsBundleIdCapabilities extends SpatieData
{
    /**
     * @param  array<int, BundleIdRelationshipsBundleIdCapabilitiesDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, BundleIdRelationshipsBundleIdCapabilitiesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
