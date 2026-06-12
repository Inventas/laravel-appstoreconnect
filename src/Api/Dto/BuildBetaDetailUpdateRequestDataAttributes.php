<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildBetaDetailUpdateRequestDataAttributes
 */
class BuildBetaDetailUpdateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public bool|Optional|null $autoNotifyEnabled = new Optional,
    ) {}
}
