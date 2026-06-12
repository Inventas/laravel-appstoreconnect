<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiWorkflowAttributes
 */
class CiWorkflowAttributes extends SpatieData
{
    /**
     * @param  array<int, CiAction>|Optional  $actions
     */
    public function __construct(
        public string|Optional $name = new Optional,
        public string|Optional $description = new Optional,
        public CiBranchStartCondition|Optional $branchStartCondition = new Optional,
        public CiTagStartCondition|Optional $tagStartCondition = new Optional,
        public CiPullRequestStartCondition|Optional $pullRequestStartCondition = new Optional,
        public CiScheduledStartCondition|Optional $scheduledStartCondition = new Optional,
        public CiManualBranchStartCondition|Optional $manualBranchStartCondition = new Optional,
        public CiManualTagStartCondition|Optional $manualTagStartCondition = new Optional,
        public CiManualPullRequestStartCondition|Optional $manualPullRequestStartCondition = new Optional,
        /** @var array<int, CiAction>|Optional */
        public array|Optional $actions = new Optional,
        public bool|Optional $isEnabled = new Optional,
        public bool|Optional $isLockedForEditing = new Optional,
        public bool|Optional $clean = new Optional,
        public string|Optional $containerFilePath = new Optional,
        public string|Optional $lastModifiedDate = new Optional,
    ) {}
}
