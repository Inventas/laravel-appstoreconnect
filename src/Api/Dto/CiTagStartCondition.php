<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiTagStartCondition
 */
class CiTagStartCondition extends SpatieData
{
    public function __construct(
        public CiTagPatterns|Optional $source = new Optional,
        public CiFilesAndFoldersRule|Optional $filesAndFoldersRule = new Optional,
        public bool|Optional $autoCancel = new Optional,
    ) {}
}
