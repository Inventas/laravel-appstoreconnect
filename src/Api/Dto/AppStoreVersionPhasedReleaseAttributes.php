<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionPhasedReleaseAttributes
 */
class AppStoreVersionPhasedReleaseAttributes extends SpatieData
{
    public function __construct(
        public PhasedReleaseState|Optional $phasedReleaseState = new Optional,
        public string|Optional $startDate = new Optional,
        public int|Optional $totalPauseDuration = new Optional,
        public int|Optional $currentDayNumber = new Optional,
    ) {}
}
