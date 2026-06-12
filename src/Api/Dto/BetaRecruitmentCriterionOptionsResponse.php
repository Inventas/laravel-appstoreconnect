<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaRecruitmentCriterionOptionsResponse
 */
class BetaRecruitmentCriterionOptionsResponse extends SpatieData
{
    /**
     * @param  array<int, BetaRecruitmentCriterionOption>  $data
     */
    public function __construct(
        /** @var array<int, BetaRecruitmentCriterionOption> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
