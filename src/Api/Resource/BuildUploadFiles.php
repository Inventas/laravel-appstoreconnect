<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\BuildUploadFileCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\BuildUploadFileUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\BuildUploadFiles\BuildUploadFilesCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\BuildUploadFiles\BuildUploadFilesGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\BuildUploadFiles\BuildUploadFilesUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class BuildUploadFiles extends BaseResource
{
    public function buildUploadFilesCreateInstance(
        BuildUploadFileCreateRequest $payload,
    ): Response {
        return $this->connector->send(new BuildUploadFilesCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsbuildUploadFiles
     */
    public function buildUploadFilesGetInstance(string $id, ?array $fieldsbuildUploadFiles = null): Response
    {
        return $this->connector->send(new BuildUploadFilesGetInstance($id, $fieldsbuildUploadFiles));
    }

    public function buildUploadFilesUpdateInstance(
        string $id,
        BuildUploadFileUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new BuildUploadFilesUpdateInstance($id, $payload));
    }
}
