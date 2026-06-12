<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaRecruitmentCriterionCompatibleBuildCheckAttributes
 */
class BetaRecruitmentCriterionCompatibleBuildCheckAttributes extends SpatieData
{
    public function __construct(
        public bool|Optional $hasCompatibleBuild = new Optional,
    ) {}
}
