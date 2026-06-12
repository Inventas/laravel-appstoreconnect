<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiBuildRunAttributesDestinationCommit
 */
class CiBuildRunAttributesDestinationCommit extends SpatieData
{
    public function __construct(
        public string|Optional $commitSha = new Optional,
        public string|Optional $message = new Optional,
        public CiGitUser|Optional $author = new Optional,
        public CiGitUser|Optional $committer = new Optional,
        public string|Optional $webUrl = new Optional,
    ) {}
}
