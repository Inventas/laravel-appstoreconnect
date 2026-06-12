<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiBuildActionRelationshipsTestResults
 */
class CiBuildActionRelationshipsTestResults extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
    ) {}
}
