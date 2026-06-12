<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaRecruitmentCriterionCompatibleBuildCheckResponse
 */
class BetaRecruitmentCriterionCompatibleBuildCheckResponse extends SpatieData
{
    public function __construct(
        public BetaRecruitmentCriterionCompatibleBuildCheck $data,
        public DocumentLinks $links,
    ) {}
}
