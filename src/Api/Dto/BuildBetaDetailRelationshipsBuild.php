<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildBetaDetailRelationshipsBuild
 */
class BuildBetaDetailRelationshipsBuild extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public BuildBetaDetailRelationshipsBuildData|Optional $data = new Optional,
    ) {}
}
