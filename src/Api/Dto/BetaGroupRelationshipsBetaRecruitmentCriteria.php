<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaGroupRelationshipsBetaRecruitmentCriteria
 */
class BetaGroupRelationshipsBetaRecruitmentCriteria extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public BetaGroupRelationshipsBetaRecruitmentCriteriaData|Optional $data = new Optional,
    ) {}
}
