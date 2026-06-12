<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ScmGitReferenceAttributes
 */
class ScmGitReferenceAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $name = new Optional,
        public string|Optional $canonicalName = new Optional,
        public bool|Optional $isDeleted = new Optional,
        public CiGitRefKind|Optional $kind = new Optional,
    ) {}
}
