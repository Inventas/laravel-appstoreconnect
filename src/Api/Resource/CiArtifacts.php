<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Requests\CiArtifacts\CiArtifactsGetInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class CiArtifacts extends BaseResource
{
    /**
     * @param  array<int, string>|null  $fieldsciArtifacts
     */
    public function ciArtifactsGetInstance(string $id, ?array $fieldsciArtifacts = null): Response
    {
        return $this->connector->send(new CiArtifactsGetInstance($id, $fieldsciArtifacts));
    }
}
