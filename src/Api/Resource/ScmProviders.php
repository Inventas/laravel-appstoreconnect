<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Requests\ScmProviders\ScmProvidersGetCollection;
use Inventas\AppStoreConnectKit\Api\Requests\ScmProviders\ScmProvidersGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\ScmProviders\ScmProvidersRepositoriesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\ScmProviders\ScmProvidersRepositoriesGetToManyRelationship;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class ScmProviders extends BaseResource
{
    /**
     * @param  array<int, string>|null  $fieldsscmProviders
     */
    public function scmProvidersGetCollection(?array $fieldsscmProviders = null, ?int $limit = null): Response
    {
        return $this->connector->send(new ScmProvidersGetCollection($fieldsscmProviders, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsscmProviders
     */
    public function scmProvidersGetInstance(string $id, ?array $fieldsscmProviders = null): Response
    {
        return $this->connector->send(new ScmProvidersGetInstance($id, $fieldsscmProviders));
    }

    public function scmProvidersRepositoriesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new ScmProvidersRepositoriesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterid
     * @param  array<int, string>|null  $fieldsscmRepositories
     * @param  array<int, string>|null  $fieldsscmProviders
     * @param  array<int, string>|null  $fieldsscmGitReferences
     * @param  array<int, string>|null  $include
     */
    public function scmProvidersRepositoriesGetToManyRelated(
        string $id,
        ?array $filterid = null,
        ?array $fieldsscmRepositories = null,
        ?array $fieldsscmProviders = null,
        ?array $fieldsscmGitReferences = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new ScmProvidersRepositoriesGetToManyRelated($id, $filterid, $fieldsscmRepositories, $fieldsscmProviders, $fieldsscmGitReferences, $limit, $include));
    }
}
