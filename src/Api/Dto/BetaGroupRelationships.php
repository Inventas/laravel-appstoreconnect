<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaGroupRelationships
 */
class BetaGroupRelationships extends SpatieData
{
    public function __construct(
        public BetaGroupRelationshipsApp|Optional $app = new Optional,
        public BetaGroupRelationshipsBuilds|Optional $builds = new Optional,
        public BetaGroupRelationshipsBetaTesters|Optional $betaTesters = new Optional,
        public BetaGroupRelationshipsBetaRecruitmentCriteria|Optional $betaRecruitmentCriteria = new Optional,
        public BetaGroupRelationshipsBetaRecruitmentCriterionCompatibleBuildCheck|Optional $betaRecruitmentCriterionCompatibleBuildCheck = new Optional,
    ) {}
}
