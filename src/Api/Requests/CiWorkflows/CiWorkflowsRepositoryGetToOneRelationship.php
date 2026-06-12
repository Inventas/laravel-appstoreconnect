<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\CiWorkflows;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ciWorkflows_repository_getToOneRelationship
 */
class CiWorkflowsRepositoryGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/ciWorkflows/{$this->id}/relationships/repository";
    }

    public function __construct(
        protected string $id,
    ) {}
}
