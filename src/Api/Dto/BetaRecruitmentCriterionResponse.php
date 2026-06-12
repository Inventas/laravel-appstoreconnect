<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaRecruitmentCriterionResponse
 */
class BetaRecruitmentCriterionResponse extends SpatieData
{
    public function __construct(
        public BetaRecruitmentCriterion $data,
        public DocumentLinks $links,
    ) {}
}
