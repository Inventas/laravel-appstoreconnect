<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Requests\ScmPullRequests\ScmPullRequestsGetInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class ScmPullRequests extends BaseResource
{
    /**
     * @param  array<int, string>|null  $fieldsscmPullRequests
     * @param  array<int, string>|null  $fieldsscmRepositories
     * @param  array<int, string>|null  $include
     */
    public function scmPullRequestsGetInstance(
        string $id,
        ?array $fieldsscmPullRequests = null,
        ?array $fieldsscmRepositories = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new ScmPullRequestsGetInstance($id, $fieldsscmPullRequests, $fieldsscmRepositories, $include));
    }
}
