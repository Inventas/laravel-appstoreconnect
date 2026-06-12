<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaRecruitmentCriterionCreateRequestDataRelationshipsBetaGroup
 */
class BetaRecruitmentCriterionCreateRequestDataRelationshipsBetaGroup extends SpatieData
{
    public function __construct(
        public BetaRecruitmentCriterionCreateRequestDataRelationshipsBetaGroupData $data,
    ) {}
}
