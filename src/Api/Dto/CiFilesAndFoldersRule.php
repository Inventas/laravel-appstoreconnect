<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiFilesAndFoldersRule
 */
class CiFilesAndFoldersRule extends SpatieData
{
    /**
     * @param  array<int, CiStartConditionFileMatcher>|Optional  $matchers
     */
    public function __construct(
        public string|Optional $mode = new Optional,
        /** @var array<int, CiStartConditionFileMatcher>|Optional */
        public array|Optional $matchers = new Optional,
    ) {}
}
