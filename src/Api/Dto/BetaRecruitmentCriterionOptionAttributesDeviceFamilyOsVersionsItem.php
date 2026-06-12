<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaRecruitmentCriterionOptionAttributesDeviceFamilyOsVersionsItem
 */
class BetaRecruitmentCriterionOptionAttributesDeviceFamilyOsVersionsItem extends SpatieData
{
    /**
     * @param  array<int, string>|Optional  $osVersions
     */
    public function __construct(
        public DeviceFamily|Optional $deviceFamily = new Optional,
        /** @var array<int, string>|Optional */
        public array|Optional $osVersions = new Optional,
    ) {}
}
