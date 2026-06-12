<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaRecruitmentCriterionOption
 */
class BetaRecruitmentCriterionOption extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public BetaRecruitmentCriterionOptionAttributes|Optional $attributes = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
