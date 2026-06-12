<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiStartConditionFileMatcher
 */
class CiStartConditionFileMatcher extends SpatieData
{
    public function __construct(
        public string|Optional $directory = new Optional,
        public string|Optional $fileExtension = new Optional,
        public string|Optional $fileName = new Optional,
    ) {}
}
