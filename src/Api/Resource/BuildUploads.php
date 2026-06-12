<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\BuildUploadCreateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\BuildUploads\BuildUploadsBuildUploadFilesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\BuildUploads\BuildUploadsBuildUploadFilesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\BuildUploads\BuildUploadsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\BuildUploads\BuildUploadsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\BuildUploads\BuildUploadsGetInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class BuildUploads extends BaseResource
{
    public function buildUploadsCreateInstance(
        BuildUploadCreateRequest $payload,
    ): Response {
        return $this->connector->send(new BuildUploadsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsbuildUploads
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $fieldsbuildUploadFiles
     * @param  array<int, string>|null  $include
     */
    public function buildUploadsGetInstance(
        string $id,
        ?array $fieldsbuildUploads = null,
        ?array $fieldsbuilds = null,
        ?array $fieldsbuildUploadFiles = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new BuildUploadsGetInstance($id, $fieldsbuildUploads, $fieldsbuilds, $fieldsbuildUploadFiles, $include));
    }

    public function buildUploadsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new BuildUploadsDeleteInstance($id));
    }

    public function buildUploadsBuildUploadFilesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new BuildUploadsBuildUploadFilesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsbuildUploadFiles
     */
    public function buildUploadsBuildUploadFilesGetToManyRelated(
        string $id,
        ?array $fieldsbuildUploadFiles = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new BuildUploadsBuildUploadFilesGetToManyRelated($id, $fieldsbuildUploadFiles, $limit));
    }
}
