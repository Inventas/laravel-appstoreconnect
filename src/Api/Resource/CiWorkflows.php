<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\CiWorkflowCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\CiWorkflowUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\CiWorkflows\CiWorkflowsBuildRunsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\CiWorkflows\CiWorkflowsBuildRunsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\CiWorkflows\CiWorkflowsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\CiWorkflows\CiWorkflowsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\CiWorkflows\CiWorkflowsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\CiWorkflows\CiWorkflowsRepositoryGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\CiWorkflows\CiWorkflowsRepositoryGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\CiWorkflows\CiWorkflowsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class CiWorkflows extends BaseResource
{
    public function ciWorkflowsCreateInstance(
        CiWorkflowCreateRequest $payload,
    ): Response {
        return $this->connector->send(new CiWorkflowsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsciWorkflows
     * @param  array<int, string>|null  $fieldsciProducts
     * @param  array<int, string>|null  $fieldsscmRepositories
     * @param  array<int, string>|null  $fieldsciXcodeVersions
     * @param  array<int, string>|null  $fieldsciMacOsVersions
     * @param  array<int, string>|null  $include
     */
    public function ciWorkflowsGetInstance(
        string $id,
        ?array $fieldsciWorkflows = null,
        ?array $fieldsciProducts = null,
        ?array $fieldsscmRepositories = null,
        ?array $fieldsciXcodeVersions = null,
        ?array $fieldsciMacOsVersions = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new CiWorkflowsGetInstance($id, $fieldsciWorkflows, $fieldsciProducts, $fieldsscmRepositories, $fieldsciXcodeVersions, $fieldsciMacOsVersions, $include));
    }

    public function ciWorkflowsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new CiWorkflowsDeleteInstance($id));
    }

    public function ciWorkflowsUpdateInstance(
        string $id,
        CiWorkflowUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new CiWorkflowsUpdateInstance($id, $payload));
    }

    public function ciWorkflowsBuildRunsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new CiWorkflowsBuildRunsGetToManyRelationship($id, $limit));
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
    public function ciWorkflowsBuildRunsGetToManyRelated(
        string $id,
        ?array $filterbuilds = null,
        ?array $sort = null,
        ?array $fieldsciBuildRuns = null,
        ?array $fieldsbuilds = null,
        ?array $fieldsciWorkflows = null,
        ?array $fieldsciProducts = null,
        ?array $fieldsscmGitReferences = null,
        ?array $fieldsscmPullRequests = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitbuilds = null,
    ): Response {
        return $this->connector->send(new CiWorkflowsBuildRunsGetToManyRelated($id, $filterbuilds, $sort, $fieldsciBuildRuns, $fieldsbuilds, $fieldsciWorkflows, $fieldsciProducts, $fieldsscmGitReferences, $fieldsscmPullRequests, $limit, $include, $limitbuilds));
    }

    public function ciWorkflowsRepositoryGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new CiWorkflowsRepositoryGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsscmRepositories
     * @param  array<int, string>|null  $fieldsscmProviders
     * @param  array<int, string>|null  $fieldsscmGitReferences
     * @param  array<int, string>|null  $include
     */
    public function ciWorkflowsRepositoryGetToOneRelated(
        string $id,
        ?array $fieldsscmRepositories = null,
        ?array $fieldsscmProviders = null,
        ?array $fieldsscmGitReferences = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new CiWorkflowsRepositoryGetToOneRelated($id, $fieldsscmRepositories, $fieldsscmProviders, $fieldsscmGitReferences, $include));
    }
}
