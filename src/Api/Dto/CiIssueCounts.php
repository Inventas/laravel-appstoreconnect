<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiIssueCounts
 */
class CiIssueCounts extends SpatieData
{
    public function __construct(
        public int|Optional $analyzerWarnings = new Optional,
        public int|Optional $errors = new Optional,
        public int|Optional $testFailures = new Optional,
        public int|Optional $warnings = new Optional,
    ) {}
}
