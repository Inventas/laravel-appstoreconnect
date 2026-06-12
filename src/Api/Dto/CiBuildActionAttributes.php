<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiBuildActionAttributes
 */
class CiBuildActionAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $name = new Optional,
        public CiActionType|Optional $actionType = new Optional,
        public string|Optional $startedDate = new Optional,
        public string|Optional $finishedDate = new Optional,
        public CiIssueCounts|Optional $issueCounts = new Optional,
        public CiExecutionProgress|Optional $executionProgress = new Optional,
        public CiCompletionStatus|Optional $completionStatus = new Optional,
        public bool|Optional $isRequiredToPass = new Optional,
    ) {}
}
