<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiProductRelationships
 */
class CiProductRelationships extends SpatieData
{
    public function __construct(
        public CiProductRelationshipsApp|Optional $app = new Optional,
        public CiProductRelationshipsBundleId|Optional $bundleId = new Optional,
        public CiProductRelationshipsWorkflows|Optional $workflows = new Optional,
        public CiProductRelationshipsPrimaryRepositories|Optional $primaryRepositories = new Optional,
        public CiProductRelationshipsAdditionalRepositories|Optional $additionalRepositories = new Optional,
        public CiProductRelationshipsBuildRuns|Optional $buildRuns = new Optional,
    ) {}
}
