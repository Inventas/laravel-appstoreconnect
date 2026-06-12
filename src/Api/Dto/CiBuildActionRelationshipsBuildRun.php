<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiBuildActionRelationshipsBuildRun
 */
class CiBuildActionRelationshipsBuildRun extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public CiBuildActionRelationshipsBuildRunData|Optional $data = new Optional,
    ) {}
}
