<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\CiWorkflows;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ciWorkflows_buildRuns_getToManyRelationship
 */
class CiWorkflowsBuildRunsGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/ciWorkflows/{$this->id}/relationships/buildRuns";
    }

    public function __construct(
        protected string $id,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
