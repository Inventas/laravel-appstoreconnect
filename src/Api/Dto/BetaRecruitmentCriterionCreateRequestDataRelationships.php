<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaRecruitmentCriterionCreateRequestDataRelationships
 */
class BetaRecruitmentCriterionCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public BetaRecruitmentCriterionCreateRequestDataRelationshipsBetaGroup $betaGroup,
    ) {}
}
