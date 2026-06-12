<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\ScmGitReferences;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * scmGitReferences_getInstance
 */
class ScmGitReferencesGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/scmGitReferences/{$this->id}";
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
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
