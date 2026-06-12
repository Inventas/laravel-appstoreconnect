<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiBuildActionRelationships
 */
class CiBuildActionRelationships extends SpatieData
{
    public function __construct(
        public CiBuildActionRelationshipsBuildRun|Optional $buildRun = new Optional,
        public CiBuildActionRelationshipsArtifacts|Optional $artifacts = new Optional,
        public CiBuildActionRelationshipsIssues|Optional $issues = new Optional,
        public CiBuildActionRelationshipsTestResults|Optional $testResults = new Optional,
    ) {}
}
