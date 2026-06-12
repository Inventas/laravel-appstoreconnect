<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionPhasedReleaseCreateRequestDataAttributes
 */
class AppStoreVersionPhasedReleaseCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public PhasedReleaseState|Optional $phasedReleaseState = new Optional,
    ) {}
}
