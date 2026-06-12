<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaGroupBetaRecruitmentCriteriaLinkageResponse
 */
class BetaGroupBetaRecruitmentCriteriaLinkageResponse extends SpatieData
{
    public function __construct(
        public BetaGroupBetaRecruitmentCriteriaLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
