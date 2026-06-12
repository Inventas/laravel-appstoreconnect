<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\SandboxTesterV2updateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\SandboxTesters\SandboxTestersV2GetCollection;
use Inventas\AppStoreConnectKit\Api\Requests\SandboxTesters\SandboxTestersV2UpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class SandboxTesters extends BaseResource
{
    /**
     * @param  array<int, string>|null  $fieldssandboxTesters
     */
    public function sandboxTestersV2getCollection(?array $fieldssandboxTesters = null, ?int $limit = null): Response
    {
        return $this->connector->send(new SandboxTestersV2GetCollection($fieldssandboxTesters, $limit));
    }

    public function sandboxTestersV2updateInstance(
        string $id,
        SandboxTesterV2updateRequest $payload,
    ): Response {
        return $this->connector->send(new SandboxTestersV2UpdateInstance($id, $payload));
    }
}
