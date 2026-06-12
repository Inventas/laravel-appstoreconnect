<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ScmPullRequestAttributes
 */
class ScmPullRequestAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $title = new Optional,
        public int|Optional $number = new Optional,
        public string|Optional $webUrl = new Optional,
        public string|Optional $sourceRepositoryOwner = new Optional,
        public string|Optional $sourceRepositoryName = new Optional,
        public string|Optional $sourceBranchName = new Optional,
        public string|Optional $destinationRepositoryOwner = new Optional,
        public string|Optional $destinationRepositoryName = new Optional,
        public string|Optional $destinationBranchName = new Optional,
        public bool|Optional $isClosed = new Optional,
        public bool|Optional $isCrossRepository = new Optional,
    ) {}
}
