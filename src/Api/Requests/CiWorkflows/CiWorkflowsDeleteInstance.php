<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\CiWorkflows;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ciWorkflows_deleteInstance
 */
class CiWorkflowsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/ciWorkflows/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
