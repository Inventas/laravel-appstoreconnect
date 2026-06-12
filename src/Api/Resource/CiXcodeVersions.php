<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Requests\CiXcodeVersions\CiXcodeVersionsGetCollection;
use Inventas\AppStoreConnectKit\Api\Requests\CiXcodeVersions\CiXcodeVersionsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\CiXcodeVersions\CiXcodeVersionsMacOsVersionsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\CiXcodeVersions\CiXcodeVersionsMacOsVersionsGetToManyRelationship;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class CiXcodeVersions extends BaseResource
{
    /**
     * @param  array<int, string>|null  $fieldsciXcodeVersions
     * @param  array<int, string>|null  $fieldsciMacOsVersions
     * @param  array<int, string>|null  $include
     */
    public function ciXcodeVersionsGetCollection(
        ?array $fieldsciXcodeVersions = null,
        ?array $fieldsciMacOsVersions = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitmacOsVersions = null,
    ): Response {
        return $this->connector->send(new CiXcodeVersionsGetCollection($fieldsciXcodeVersions, $fieldsciMacOsVersions, $limit, $include, $limitmacOsVersions));
    }

    /**
     * @param  array<int, string>|null  $fieldsciXcodeVersions
     * @param  array<int, string>|null  $fieldsciMacOsVersions
     * @param  array<int, string>|null  $include
     */
    public function ciXcodeVersionsGetInstance(
        string $id,
        ?array $fieldsciXcodeVersions = null,
        ?array $fieldsciMacOsVersions = null,
        ?array $include = null,
        ?int $limitmacOsVersions = null,
    ): Response {
        return $this->connector->send(new CiXcodeVersionsGetInstance($id, $fieldsciXcodeVersions, $fieldsciMacOsVersions, $include, $limitmacOsVersions));
    }

    public function ciXcodeVersionsMacOsVersionsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new CiXcodeVersionsMacOsVersionsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsciMacOsVersions
     * @param  array<int, string>|null  $fieldsciXcodeVersions
     * @param  array<int, string>|null  $include
     */
    public function ciXcodeVersionsMacOsVersionsGetToManyRelated(
        string $id,
        ?array $fieldsciMacOsVersions = null,
        ?array $fieldsciXcodeVersions = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitxcodeVersions = null,
    ): Response {
        return $this->connector->send(new CiXcodeVersionsMacOsVersionsGetToManyRelated($id, $fieldsciMacOsVersions, $fieldsciXcodeVersions, $limit, $include, $limitxcodeVersions));
    }
}
