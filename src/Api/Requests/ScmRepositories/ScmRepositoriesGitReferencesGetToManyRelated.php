<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\ScmRepositories;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * scmRepositories_gitReferences_getToManyRelated
 */
class ScmRepositoriesGitReferencesGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/scmRepositories/{$this->id}/gitReferences";
    }

    /**
     * @param  array<int, string>|null  $fieldsscmGitReferences
     * @param  array<int, string>|null  $fieldsscmRepositories
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsscmGitReferences = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsscmRepositories = null,
        protected ?int $limit = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[scmGitReferences]' => $this->fieldsscmGitReferences,
            'fields[scmRepositories]' => $this->fieldsscmRepositories,
            'limit' => $this->limit,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
