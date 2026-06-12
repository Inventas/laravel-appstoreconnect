<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiWorkflowRelationshipsRepository
 */
class CiWorkflowRelationshipsRepository extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public CiWorkflowRelationshipsRepositoryData|Optional $data = new Optional,
    ) {}
}
