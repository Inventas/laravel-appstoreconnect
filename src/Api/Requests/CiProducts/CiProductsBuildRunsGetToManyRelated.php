<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\CiProducts;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ciProducts_buildRuns_getToManyRelated
 */
class CiProductsBuildRunsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/ciProducts/{$this->id}/buildRuns";
    }

    /**
     * @param  array<int, string>|null  $filterbuilds
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldsciBuildRuns
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $fieldsciWorkflows
     * @param  array<int, string>|null  $fieldsciProducts
     * @param  array<int, string>|null  $fieldsscmGitReferences
     * @param  array<int, string>|null  $fieldsscmPullRequests
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $filterbuilds = null,
        /** @var array<int, string>|null */
        protected ?array $sort = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsciBuildRuns = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbuilds = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsciWorkflows = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsciProducts = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsscmGitReferences = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsscmPullRequests = null,
        protected ?int $limit = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitbuilds = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'filter[builds]' => $this->filterbuilds,
            'sort' => $this->sort,
            'fields[ciBuildRuns]' => $this->fieldsciBuildRuns,
            'fields[builds]' => $this->fieldsbuilds,
            'fields[ciWorkflows]' => $this->fieldsciWorkflows,
            'fields[ciProducts]' => $this->fieldsciProducts,
            'fields[scmGitReferences]' => $this->fieldsscmGitReferences,
            'fields[scmPullRequests]' => $this->fieldsscmPullRequests,
            'limit' => $this->limit,
            'include' => $this->include,
            'limit[builds]' => $this->limitbuilds,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
