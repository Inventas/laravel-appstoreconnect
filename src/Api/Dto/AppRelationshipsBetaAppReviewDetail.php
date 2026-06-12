<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppRelationshipsBetaAppReviewDetail
 */
class AppRelationshipsBetaAppReviewDetail extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public AppRelationshipsBetaAppReviewDetailData|Optional $data = new Optional,
    ) {}
}
