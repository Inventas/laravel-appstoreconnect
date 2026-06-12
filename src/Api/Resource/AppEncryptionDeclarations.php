<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\AppEncryptionDeclarationBuildsLinkagesRequest;
use Inventas\AppStoreConnectKit\Api\Dto\AppEncryptionDeclarationCreateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\AppEncryptionDeclarations\AppEncryptionDeclarationsAppEncryptionDeclarationDocumentGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppEncryptionDeclarations\AppEncryptionDeclarationsAppEncryptionDeclarationDocumentGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppEncryptionDeclarations\AppEncryptionDeclarationsAppGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppEncryptionDeclarations\AppEncryptionDeclarationsAppGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppEncryptionDeclarations\AppEncryptionDeclarationsBuildsCreateToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppEncryptionDeclarations\AppEncryptionDeclarationsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppEncryptionDeclarations\AppEncryptionDeclarationsGetCollection;
use Inventas\AppStoreConnectKit\Api\Requests\AppEncryptionDeclarations\AppEncryptionDeclarationsGetInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AppEncryptionDeclarations extends BaseResource
{
    /**
     * @param  array<int, string>|null  $filterplatform
     * @param  array<int, string>|null  $filterapp
     * @param  array<int, string>|null  $filterbuilds
     * @param  array<int, string>|null  $fieldsappEncryptionDeclarations
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $fieldsappEncryptionDeclarationDocuments
     * @param  array<int, string>|null  $include
     */
    public function appEncryptionDeclarationsGetCollection(
        ?array $filterplatform = null,
        ?array $filterapp = null,
        ?array $filterbuilds = null,
        ?array $fieldsappEncryptionDeclarations = null,
        ?array $fieldsapps = null,
        ?array $fieldsbuilds = null,
        ?array $fieldsappEncryptionDeclarationDocuments = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitbuilds = null,
    ): Response {
        return $this->connector->send(new AppEncryptionDeclarationsGetCollection($filterplatform, $filterapp, $filterbuilds, $fieldsappEncryptionDeclarations, $fieldsapps, $fieldsbuilds, $fieldsappEncryptionDeclarationDocuments, $limit, $include, $limitbuilds));
    }

    public function appEncryptionDeclarationsCreateInstance(
        AppEncryptionDeclarationCreateRequest $payload,
    ): Response {
        return $this->connector->send(new AppEncryptionDeclarationsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsappEncryptionDeclarations
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $fieldsappEncryptionDeclarationDocuments
     * @param  array<int, string>|null  $include
     */
    public function appEncryptionDeclarationsGetInstance(
        string $id,
        ?array $fieldsappEncryptionDeclarations = null,
        ?array $fieldsapps = null,
        ?array $fieldsbuilds = null,
        ?array $fieldsappEncryptionDeclarationDocuments = null,
        ?array $include = null,
        ?int $limitbuilds = null,
    ): Response {
        return $this->connector->send(new AppEncryptionDeclarationsGetInstance($id, $fieldsappEncryptionDeclarations, $fieldsapps, $fieldsbuilds, $fieldsappEncryptionDeclarationDocuments, $include, $limitbuilds));
    }

    public function appEncryptionDeclarationsAppGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new AppEncryptionDeclarationsAppGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsapps
     */
    public function appEncryptionDeclarationsAppGetToOneRelated(string $id, ?array $fieldsapps = null): Response
    {
        return $this->connector->send(new AppEncryptionDeclarationsAppGetToOneRelated($id, $fieldsapps));
    }

    public function appEncryptionDeclarationsAppEncryptionDeclarationDocumentGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new AppEncryptionDeclarationsAppEncryptionDeclarationDocumentGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsappEncryptionDeclarationDocuments
     */
    public function appEncryptionDeclarationsAppEncryptionDeclarationDocumentGetToOneRelated(
        string $id,
        ?array $fieldsappEncryptionDeclarationDocuments = null,
    ): Response {
        return $this->connector->send(new AppEncryptionDeclarationsAppEncryptionDeclarationDocumentGetToOneRelated($id, $fieldsappEncryptionDeclarationDocuments));
    }

    public function appEncryptionDeclarationsBuildsCreateToManyRelationship(
        string $id,
        AppEncryptionDeclarationBuildsLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new AppEncryptionDeclarationsBuildsCreateToManyRelationship($id, $payload));
    }
}
