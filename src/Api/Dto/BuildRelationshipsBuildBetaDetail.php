<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildRelationshipsBuildBetaDetail
 */
class BuildRelationshipsBuildBetaDetail extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public BuildRelationshipsBuildBetaDetailData|Optional $data = new Optional,
    ) {}
}
