<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiWorkflowRelationships
 */
class CiWorkflowRelationships extends SpatieData
{
    public function __construct(
        public CiWorkflowRelationshipsProduct|Optional $product = new Optional,
        public CiWorkflowRelationshipsRepository|Optional $repository = new Optional,
        public CiWorkflowRelationshipsXcodeVersion|Optional $xcodeVersion = new Optional,
        public CiWorkflowRelationshipsMacOsVersion|Optional $macOsVersion = new Optional,
        public CiWorkflowRelationshipsBuildRuns|Optional $buildRuns = new Optional,
    ) {}
}
