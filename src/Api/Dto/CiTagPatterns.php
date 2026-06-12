<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiTagPatterns
 */
class CiTagPatterns extends SpatieData
{
    /**
     * @param  array<int, CiTagPatternsPatternsItem>|Optional  $patterns
     */
    public function __construct(
        public bool|Optional $isAllMatch = new Optional,
        /** @var array<int, CiTagPatternsPatternsItem>|Optional */
        public array|Optional $patterns = new Optional,
    ) {}
}
