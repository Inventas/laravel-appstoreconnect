<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiBuildRunCreateRequestDataRelationships
 */
class CiBuildRunCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public CiBuildRunCreateRequestDataRelationshipsBuildRun|Optional $buildRun = new Optional,
        public CiBuildRunCreateRequestDataRelationshipsWorkflow|Optional $workflow = new Optional,
        public CiBuildRunCreateRequestDataRelationshipsSourceBranchOrTag|Optional $sourceBranchOrTag = new Optional,
        public CiBuildRunCreateRequestDataRelationshipsPullRequest|Optional $pullRequest = new Optional,
    ) {}
}
