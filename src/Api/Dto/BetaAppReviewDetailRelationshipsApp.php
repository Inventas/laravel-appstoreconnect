<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaAppReviewDetailRelationshipsApp
 */
class BetaAppReviewDetailRelationshipsApp extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public BetaAppReviewDetailRelationshipsAppData|Optional $data = new Optional,
    ) {}
}
