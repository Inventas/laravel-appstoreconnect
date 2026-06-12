<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiWorkflowUpdateRequestDataAttributes
 */
class CiWorkflowUpdateRequestDataAttributes extends SpatieData
{
    /**
     * @param  array<int, CiAction>|Optional|null  $actions
     */
    public function __construct(
        public string|Optional|null $name = new Optional,
        public string|Optional|null $description = new Optional,
        public CiBranchStartCondition|Optional $branchStartCondition = new Optional,
        public CiTagStartCondition|Optional $tagStartCondition = new Optional,
        public CiPullRequestStartCondition|Optional $pullRequestStartCondition = new Optional,
        public CiScheduledStartCondition|Optional $scheduledStartCondition = new Optional,
        public CiManualBranchStartCondition|Optional $manualBranchStartCondition = new Optional,
        public CiManualTagStartCondition|Optional $manualTagStartCondition = new Optional,
        public CiManualPullRequestStartCondition|Optional $manualPullRequestStartCondition = new Optional,
        /** @var array<int, CiAction>|Optional|null */
        public array|Optional|null $actions = new Optional,
        public bool|Optional|null $isEnabled = new Optional,
        public bool|Optional|null $isLockedForEditing = new Optional,
        public bool|Optional|null $clean = new Optional,
        public string|Optional|null $containerFilePath = new Optional,
    ) {}
}
