<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaRecruitmentCriterionCreateRequestDataAttributes
 */
class BetaRecruitmentCriterionCreateRequestDataAttributes extends SpatieData
{
    /**
     * @param  array<int, DeviceFamilyOsVersionFilter>  $deviceFamilyOsVersionFilters
     */
    public function __construct(
        /** @var array<int, DeviceFamilyOsVersionFilter> */
        public array $deviceFamilyOsVersionFilters,
    ) {}
}
