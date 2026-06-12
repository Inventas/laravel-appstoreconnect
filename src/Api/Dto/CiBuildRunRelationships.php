<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiBuildRunRelationships
 */
class CiBuildRunRelationships extends SpatieData
{
    public function __construct(
        public CiBuildRunRelationshipsBuilds|Optional $builds = new Optional,
        public CiBuildRunRelationshipsWorkflow|Optional $workflow = new Optional,
        public CiBuildRunRelationshipsProduct|Optional $product = new Optional,
        public CiBuildRunRelationshipsSourceBranchOrTag|Optional $sourceBranchOrTag = new Optional,
        public CiBuildRunRelationshipsDestinationBranch|Optional $destinationBranch = new Optional,
        public CiBuildRunRelationshipsActions|Optional $actions = new Optional,
        public CiBuildRunRelationshipsPullRequest|Optional $pullRequest = new Optional,
    ) {}
}
