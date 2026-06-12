<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaGroupsResponse
 */
class BetaGroupsResponse extends SpatieData
{
    /**
     * @param  array<int, BetaGroup>  $data
     * @param  array<int, App|BetaRecruitmentCriterion|BetaTester|Build>|Optional  $included
     */
    public function __construct(
        /** @var array<int, BetaGroup> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, App|BetaRecruitmentCriterion|BetaTester|Build>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
