<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ScmRepositoryAttributes
 */
class ScmRepositoryAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $lastAccessedDate = new Optional,
        public string|Optional $httpCloneUrl = new Optional,
        public string|Optional $sshCloneUrl = new Optional,
        public string|Optional $ownerName = new Optional,
        public string|Optional $repositoryName = new Optional,
    ) {}
}
