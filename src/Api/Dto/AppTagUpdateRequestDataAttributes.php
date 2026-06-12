<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppTagUpdateRequestDataAttributes
 */
class AppTagUpdateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public bool|Optional|null $visibleInAppStore = new Optional,
    ) {}
}
