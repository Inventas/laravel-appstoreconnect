<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiManualTagStartCondition
 */
class CiManualTagStartCondition extends SpatieData
{
    public function __construct(
        public CiTagPatterns|Optional $source = new Optional,
    ) {}
}
