<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionRelationshipsAlternativeDistributionPackage
 */
class AppStoreVersionRelationshipsAlternativeDistributionPackage extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public AppStoreVersionRelationshipsAlternativeDistributionPackageData|Optional $data = new Optional,
    ) {}
}
