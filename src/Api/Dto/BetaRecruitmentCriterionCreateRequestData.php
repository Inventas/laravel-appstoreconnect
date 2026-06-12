<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaRecruitmentCriterionCreateRequestData
 */
class BetaRecruitmentCriterionCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public BetaRecruitmentCriterionCreateRequestDataAttributes $attributes,
        public BetaRecruitmentCriterionCreateRequestDataRelationships $relationships,
    ) {}
}
