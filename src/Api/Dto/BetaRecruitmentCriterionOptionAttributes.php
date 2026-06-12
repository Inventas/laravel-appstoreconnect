<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaRecruitmentCriterionOptionAttributes
 */
class BetaRecruitmentCriterionOptionAttributes extends SpatieData
{
    /**
     * @param  array<int, BetaRecruitmentCriterionOptionAttributesDeviceFamilyOsVersionsItem>|Optional  $deviceFamilyOsVersions
     */
    public function __construct(
        /** @var array<int, BetaRecruitmentCriterionOptionAttributesDeviceFamilyOsVersionsItem>|Optional */
        public array|Optional $deviceFamilyOsVersions = new Optional,
    ) {}
}
