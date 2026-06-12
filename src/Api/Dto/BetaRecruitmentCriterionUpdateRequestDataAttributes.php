<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaRecruitmentCriterionUpdateRequestDataAttributes
 */
class BetaRecruitmentCriterionUpdateRequestDataAttributes extends SpatieData
{
    /**
     * @param  array<int, DeviceFamilyOsVersionFilter>|Optional|null  $deviceFamilyOsVersionFilters
     */
    public function __construct(
        /** @var array<int, DeviceFamilyOsVersionFilter>|Optional|null */
        public array|Optional|null $deviceFamilyOsVersionFilters = new Optional,
    ) {}
}
