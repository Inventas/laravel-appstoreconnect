<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\AppEncryptionDeclarationDocumentCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\AppEncryptionDeclarationDocumentUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\AppEncryptionDeclarationDocuments\AppEncryptionDeclarationDocumentsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppEncryptionDeclarationDocuments\AppEncryptionDeclarationDocumentsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppEncryptionDeclarationDocuments\AppEncryptionDeclarationDocumentsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AppEncryptionDeclarationDocuments extends BaseResource
{
    public function appEncryptionDeclarationDocumentsCreateInstance(
        AppEncryptionDeclarationDocumentCreateRequest $payload,
    ): Response {
        return $this->connector->send(new AppEncryptionDeclarationDocumentsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsappEncryptionDeclarationDocuments
     */
    public function appEncryptionDeclarationDocumentsGetInstance(
        string $id,
        ?array $fieldsappEncryptionDeclarationDocuments = null,
    ): Response {
        return $this->connector->send(new AppEncryptionDeclarationDocumentsGetInstance($id, $fieldsappEncryptionDeclarationDocuments));
    }

    public function appEncryptionDeclarationDocumentsUpdateInstance(
        string $id,
        AppEncryptionDeclarationDocumentUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new AppEncryptionDeclarationDocumentsUpdateInstance($id, $payload));
    }
}
