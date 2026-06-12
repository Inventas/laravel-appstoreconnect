<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiWorkflowCreateRequestDataAttributes
 */
class CiWorkflowCreateRequestDataAttributes extends SpatieData
{
    /**
     * @param  array<int, CiAction>  $actions
     */
    public function __construct(
        public string $name,
        public string $description,
        /** @var array<int, CiAction> */
        public array $actions,
        public bool $isEnabled,
        public bool $clean,
        public string $containerFilePath,
        public CiBranchStartCondition|Optional $branchStartCondition = new Optional,
        public CiTagStartCondition|Optional $tagStartCondition = new Optional,
        public CiPullRequestStartCondition|Optional $pullRequestStartCondition = new Optional,
        public CiScheduledStartCondition|Optional $scheduledStartCondition = new Optional,
        public CiManualBranchStartCondition|Optional $manualBranchStartCondition = new Optional,
        public CiManualTagStartCondition|Optional $manualTagStartCondition = new Optional,
        public CiManualPullRequestStartCondition|Optional $manualPullRequestStartCondition = new Optional,
        public bool|Optional|null $isLockedForEditing = new Optional,
    ) {}
}
