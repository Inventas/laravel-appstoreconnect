<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Requests\ScmGitReferences\ScmGitReferencesGetInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class ScmGitReferences extends BaseResource
{
    /**
     * @param  array<int, string>|null  $fieldsscmGitReferences
     * @param  array<int, string>|null  $fieldsscmRepositories
     * @param  array<int, string>|null  $include
     */
    public function scmGitReferencesGetInstance(
        string $id,
        ?array $fieldsscmGitReferences = null,
        ?array $fieldsscmRepositories = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new ScmGitReferencesGetInstance($id, $fieldsscmGitReferences, $fieldsscmRepositories, $include));
    }
}
