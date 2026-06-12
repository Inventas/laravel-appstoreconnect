<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipDefaultExperienceCreateRequestDataAttributes
 */
class AppClipDefaultExperienceCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public AppClipAction|Optional $action = new Optional,
    ) {}
}
