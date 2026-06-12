<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\CiWorkflows;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ciWorkflows_repository_getToOneRelated
 */
class CiWorkflowsRepositoryGetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/ciWorkflows/{$this->id}/repository";
    }

    /**
     * @param  array<int, string>|null  $fieldsscmRepositories
     * @param  array<int, string>|null  $fieldsscmProviders
     * @param  array<int, string>|null  $fieldsscmGitReferences
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsscmRepositories = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsscmProviders = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsscmGitReferences = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[scmRepositories]' => $this->fieldsscmRepositories,
            'fields[scmProviders]' => $this->fieldsscmProviders,
            'fields[scmGitReferences]' => $this->fieldsscmGitReferences,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
