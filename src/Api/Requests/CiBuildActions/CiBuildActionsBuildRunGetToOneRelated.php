<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\CiBuildActions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ciBuildActions_buildRun_getToOneRelated
 */
class CiBuildActionsBuildRunGetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/ciBuildActions/{$this->id}/buildRun";
    }

    /**
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
            'fields[ciBuildRuns]' => $this->fieldsciBuildRuns,
            'fields[builds]' => $this->fieldsbuilds,
            'fields[ciWorkflows]' => $this->fieldsciWorkflows,
            'fields[ciProducts]' => $this->fieldsciProducts,
            'fields[scmGitReferences]' => $this->fieldsscmGitReferences,
            'fields[scmPullRequests]' => $this->fieldsscmPullRequests,
            'include' => $this->include,
            'limit[builds]' => $this->limitbuilds,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
