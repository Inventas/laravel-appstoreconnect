<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\ScmPullRequests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * scmPullRequests_getInstance
 */
class ScmPullRequestsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/scmPullRequests/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsscmPullRequests
     * @param  array<int, string>|null  $fieldsscmRepositories
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsscmPullRequests = null,
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
            'fields[scmPullRequests]' => $this->fieldsscmPullRequests,
            'fields[scmRepositories]' => $this->fieldsscmRepositories,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
