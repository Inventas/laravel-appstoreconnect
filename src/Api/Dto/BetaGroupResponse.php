<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaGroupResponse
 */
class BetaGroupResponse extends SpatieData
{
    /**
     * @param  array<int, App|BetaRecruitmentCriterion|BetaTester|Build>|Optional  $included
     */
    public function __construct(
        public BetaGroup $data,
        public DocumentLinks $links,
        /** @var array<int, App|BetaRecruitmentCriterion|BetaTester|Build>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
