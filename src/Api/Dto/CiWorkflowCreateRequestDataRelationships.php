<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * CiWorkflowCreateRequestDataRelationships
 */
class CiWorkflowCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public CiWorkflowCreateRequestDataRelationshipsProduct $product,
        public CiWorkflowCreateRequestDataRelationshipsRepository $repository,
        public CiWorkflowCreateRequestDataRelationshipsXcodeVersion $xcodeVersion,
        public CiWorkflowCreateRequestDataRelationshipsMacOsVersion $macOsVersion,
    ) {}
}
