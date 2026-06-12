<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiBranchStartCondition
 */
class CiBranchStartCondition extends SpatieData
{
    public function __construct(
        public CiBranchPatterns|Optional $source = new Optional,
        public CiFilesAndFoldersRule|Optional $filesAndFoldersRule = new Optional,
        public bool|Optional $autoCancel = new Optional,
    ) {}
}
