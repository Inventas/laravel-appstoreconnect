<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Requests\ScmRepositories\ScmRepositoriesGetCollection;
use Inventas\AppStoreConnectKit\Api\Requests\ScmRepositories\ScmRepositoriesGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\ScmRepositories\ScmRepositoriesGitReferencesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\ScmRepositories\ScmRepositoriesGitReferencesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\ScmRepositories\ScmRepositoriesPullRequestsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\ScmRepositories\ScmRepositoriesPullRequestsGetToManyRelationship;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class ScmRepositories extends BaseResource
{
    /**
     * @param  array<int, string>|null  $filterid
     * @param  array<int, string>|null  $fieldsscmRepositories
     * @param  array<int, string>|null  $fieldsscmProviders
     * @param  array<int, string>|null  $fieldsscmGitReferences
     * @param  array<int, string>|null  $include
     */
    public function scmRepositoriesGetCollection(
        ?array $filterid = null,
        ?array $fieldsscmRepositories = null,
        ?array $fieldsscmProviders = null,
        ?array $fieldsscmGitReferences = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new ScmRepositoriesGetCollection($filterid, $fieldsscmRepositories, $fieldsscmProviders, $fieldsscmGitReferences, $limit, $include));
    }

    /**
     * @param  array<int, string>|null  $fieldsscmRepositories
     * @param  array<int, string>|null  $fieldsscmProviders
     * @param  array<int, string>|null  $fieldsscmGitReferences
     * @param  array<int, string>|null  $include
     */
    public function scmRepositoriesGetInstance(
        string $id,
        ?array $fieldsscmRepositories = null,
        ?array $fieldsscmProviders = null,
        ?array $fieldsscmGitReferences = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new ScmRepositoriesGetInstance($id, $fieldsscmRepositories, $fieldsscmProviders, $fieldsscmGitReferences, $include));
    }

    public function scmRepositoriesGitReferencesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new ScmRepositoriesGitReferencesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsscmGitReferences
     * @param  array<int, string>|null  $fieldsscmRepositories
     * @param  array<int, string>|null  $include
     */
    public function scmRepositoriesGitReferencesGetToManyRelated(
        string $id,
        ?array $fieldsscmGitReferences = null,
        ?array $fieldsscmRepositories = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new ScmRepositoriesGitReferencesGetToManyRelated($id, $fieldsscmGitReferences, $fieldsscmRepositories, $limit, $include));
    }

    public function scmRepositoriesPullRequestsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new ScmRepositoriesPullRequestsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsscmPullRequests
     * @param  array<int, string>|null  $fieldsscmRepositories
     * @param  array<int, string>|null  $include
     */
    public function scmRepositoriesPullRequestsGetToManyRelated(
        string $id,
        ?array $fieldsscmPullRequests = null,
        ?array $fieldsscmRepositories = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new ScmRepositoriesPullRequestsGetToManyRelated($id, $fieldsscmPullRequests, $fieldsscmRepositories, $limit, $include));
    }
}
