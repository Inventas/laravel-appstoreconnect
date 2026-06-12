<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\ScmRepositories;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * scmRepositories_getCollection
 */
class ScmRepositoriesGetCollection extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v1/scmRepositories';
    }

    /**
     * @param  array<int, string>|null  $filterid
     * @param  array<int, string>|null  $fieldsscmRepositories
     * @param  array<int, string>|null  $fieldsscmProviders
     * @param  array<int, string>|null  $fieldsscmGitReferences
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        /** @var array<int, string>|null */
        protected ?array $filterid = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsscmRepositories = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsscmProviders = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsscmGitReferences = null,
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
            'filter[id]' => $this->filterid,
            'fields[scmRepositories]' => $this->fieldsscmRepositories,
            'fields[scmProviders]' => $this->fieldsscmProviders,
            'fields[scmGitReferences]' => $this->fieldsscmGitReferences,
            'limit' => $this->limit,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
