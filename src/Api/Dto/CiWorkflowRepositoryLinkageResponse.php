<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * CiWorkflowRepositoryLinkageResponse
 */
class CiWorkflowRepositoryLinkageResponse extends SpatieData
{
    public function __construct(
        public CiWorkflowRepositoryLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
