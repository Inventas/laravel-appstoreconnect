<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiBranchPatterns
 */
class CiBranchPatterns extends SpatieData
{
    /**
     * @param  array<int, CiBranchPatternsPatternsItem>|Optional  $patterns
     */
    public function __construct(
        public bool|Optional $isAllMatch = new Optional,
        /** @var array<int, CiBranchPatternsPatternsItem>|Optional */
        public array|Optional $patterns = new Optional,
    ) {}
}
