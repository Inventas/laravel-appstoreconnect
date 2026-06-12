<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Requests\CiMacOsVersions\CiMacOsVersionsGetCollection;
use Inventas\AppStoreConnectKit\Api\Requests\CiMacOsVersions\CiMacOsVersionsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\CiMacOsVersions\CiMacOsVersionsXcodeVersionsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\CiMacOsVersions\CiMacOsVersionsXcodeVersionsGetToManyRelationship;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class CiMacOsVersions extends BaseResource
{
    /**
     * @param  array<int, string>|null  $fieldsciMacOsVersions
     * @param  array<int, string>|null  $fieldsciXcodeVersions
     * @param  array<int, string>|null  $include
     */
    public function ciMacOsVersionsGetCollection(
        ?array $fieldsciMacOsVersions = null,
        ?array $fieldsciXcodeVersions = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitxcodeVersions = null,
    ): Response {
        return $this->connector->send(new CiMacOsVersionsGetCollection($fieldsciMacOsVersions, $fieldsciXcodeVersions, $limit, $include, $limitxcodeVersions));
    }

    /**
     * @param  array<int, string>|null  $fieldsciMacOsVersions
     * @param  array<int, string>|null  $fieldsciXcodeVersions
     * @param  array<int, string>|null  $include
     */
    public function ciMacOsVersionsGetInstance(
        string $id,
        ?array $fieldsciMacOsVersions = null,
        ?array $fieldsciXcodeVersions = null,
        ?array $include = null,
        ?int $limitxcodeVersions = null,
    ): Response {
        return $this->connector->send(new CiMacOsVersionsGetInstance($id, $fieldsciMacOsVersions, $fieldsciXcodeVersions, $include, $limitxcodeVersions));
    }

    public function ciMacOsVersionsXcodeVersionsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new CiMacOsVersionsXcodeVersionsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsciXcodeVersions
     * @param  array<int, string>|null  $fieldsciMacOsVersions
     * @param  array<int, string>|null  $include
     */
    public function ciMacOsVersionsXcodeVersionsGetToManyRelated(
        string $id,
        ?array $fieldsciXcodeVersions = null,
        ?array $fieldsciMacOsVersions = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitmacOsVersions = null,
    ): Response {
        return $this->connector->send(new CiMacOsVersionsXcodeVersionsGetToManyRelated($id, $fieldsciXcodeVersions, $fieldsciMacOsVersions, $limit, $include, $limitmacOsVersions));
    }
}
