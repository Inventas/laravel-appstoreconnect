<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * CiWorkflowCreateRequestDataRelationshipsRepository
 */
class CiWorkflowCreateRequestDataRelationshipsRepository extends SpatieData
{
    public function __construct(
        public CiWorkflowCreateRequestDataRelationshipsRepositoryData $data,
    ) {}
}
