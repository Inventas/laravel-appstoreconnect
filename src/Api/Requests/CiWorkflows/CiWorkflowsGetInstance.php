<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\CiWorkflows;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ciWorkflows_getInstance
 */
class CiWorkflowsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/ciWorkflows/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsciWorkflows
     * @param  array<int, string>|null  $fieldsciProducts
     * @param  array<int, string>|null  $fieldsscmRepositories
     * @param  array<int, string>|null  $fieldsciXcodeVersions
     * @param  array<int, string>|null  $fieldsciMacOsVersions
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsciWorkflows = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsciProducts = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsscmRepositories = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsciXcodeVersions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsciMacOsVersions = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[ciWorkflows]' => $this->fieldsciWorkflows,
            'fields[ciProducts]' => $this->fieldsciProducts,
            'fields[scmRepositories]' => $this->fieldsscmRepositories,
            'fields[ciXcodeVersions]' => $this->fieldsciXcodeVersions,
            'fields[ciMacOsVersions]' => $this->fieldsciMacOsVersions,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
