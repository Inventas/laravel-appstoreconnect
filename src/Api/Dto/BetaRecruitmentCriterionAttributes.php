<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaRecruitmentCriterionAttributes
 */
class BetaRecruitmentCriterionAttributes extends SpatieData
{
    /**
     * @param  array<int, DeviceFamilyOsVersionFilter>|Optional  $deviceFamilyOsVersionFilters
     */
    public function __construct(
        public string|Optional $lastModifiedDate = new Optional,
        /** @var array<int, DeviceFamilyOsVersionFilter>|Optional */
        public array|Optional $deviceFamilyOsVersionFilters = new Optional,
    ) {}
}
