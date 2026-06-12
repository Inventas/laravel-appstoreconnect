<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiBuildRunAttributes
 */
class CiBuildRunAttributes extends SpatieData
{
    public function __construct(
        public int|Optional $number = new Optional,
        public string|Optional $createdDate = new Optional,
        public string|Optional $startedDate = new Optional,
        public string|Optional $finishedDate = new Optional,
        public CiBuildRunAttributesSourceCommit|Optional $sourceCommit = new Optional,
        public CiBuildRunAttributesDestinationCommit|Optional $destinationCommit = new Optional,
        public bool|Optional $isPullRequestBuild = new Optional,
        public CiIssueCounts|Optional $issueCounts = new Optional,
        public CiExecutionProgress|Optional $executionProgress = new Optional,
        public CiCompletionStatus|Optional $completionStatus = new Optional,
        public string|Optional $startReason = new Optional,
        public string|Optional $cancelReason = new Optional,
    ) {}
}
