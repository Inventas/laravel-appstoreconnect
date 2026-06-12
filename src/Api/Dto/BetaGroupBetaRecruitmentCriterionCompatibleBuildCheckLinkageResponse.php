<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaGroupBetaRecruitmentCriterionCompatibleBuildCheckLinkageResponse
 */
class BetaGroupBetaRecruitmentCriterionCompatibleBuildCheckLinkageResponse extends SpatieData
{
    public function __construct(
        public BetaGroupBetaRecruitmentCriterionCompatibleBuildCheckLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
