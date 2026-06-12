<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipDefaultExperienceAttributes
 */
class AppClipDefaultExperienceAttributes extends SpatieData
{
    public function __construct(
        public AppClipAction|Optional $action = new Optional,
    ) {}
}
