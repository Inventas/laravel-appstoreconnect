<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\BackgroundAssetUploadFileCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\BackgroundAssetUploadFileUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\BackgroundAssetUploadFiles\BackgroundAssetUploadFilesCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\BackgroundAssetUploadFiles\BackgroundAssetUploadFilesGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\BackgroundAssetUploadFiles\BackgroundAssetUploadFilesUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class BackgroundAssetUploadFiles extends BaseResource
{
    public function backgroundAssetUploadFilesCreateInstance(
        BackgroundAssetUploadFileCreateRequest $payload,
    ): Response {
        return $this->connector->send(new BackgroundAssetUploadFilesCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsbackgroundAssetUploadFiles
     */
    public function backgroundAssetUploadFilesGetInstance(
        string $id,
        ?array $fieldsbackgroundAssetUploadFiles = null,
    ): Response {
        return $this->connector->send(new BackgroundAssetUploadFilesGetInstance($id, $fieldsbackgroundAssetUploadFiles));
    }

    public function backgroundAssetUploadFilesUpdateInstance(
        string $id,
        BackgroundAssetUploadFileUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new BackgroundAssetUploadFilesUpdateInstance($id, $payload));
    }
}
