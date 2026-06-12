<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaRecruitmentCriterionUpdateRequest
 */
class BetaRecruitmentCriterionUpdateRequest extends SpatieData
{
    public function __construct(
        public BetaRecruitmentCriterionUpdateRequestData $data,
    ) {}
}
