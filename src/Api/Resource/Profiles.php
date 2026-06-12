<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\ProfileCreateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\Profiles\ProfilesBundleIdGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Profiles\ProfilesBundleIdGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Profiles\ProfilesCertificatesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Profiles\ProfilesCertificatesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Profiles\ProfilesCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\Profiles\ProfilesDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\Profiles\ProfilesDevicesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Profiles\ProfilesDevicesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Profiles\ProfilesGetCollection;
use Inventas\AppStoreConnectKit\Api\Requests\Profiles\ProfilesGetInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Profiles extends BaseResource
{
    /**
     * @param  array<int, string>|null  $filtername
     * @param  array<int, string>|null  $filterprofileType
     * @param  array<int, string>|null  $filterprofileState
     * @param  array<int, string>|null  $filterid
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldsprofiles
     * @param  array<int, string>|null  $fieldsbundleIds
     * @param  array<int, string>|null  $fieldsdevices
     * @param  array<int, string>|null  $fieldscertificates
     * @param  array<int, string>|null  $include
     */
    public function profilesGetCollection(
        ?array $filtername = null,
        ?array $filterprofileType = null,
        ?array $filterprofileState = null,
        ?array $filterid = null,
        ?array $sort = null,
        ?array $fieldsprofiles = null,
        ?array $fieldsbundleIds = null,
        ?array $fieldsdevices = null,
        ?array $fieldscertificates = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitcertificates = null,
        ?int $limitdevices = null,
    ): Response {
        return $this->connector->send(new ProfilesGetCollection($filtername, $filterprofileType, $filterprofileState, $filterid, $sort, $fieldsprofiles, $fieldsbundleIds, $fieldsdevices, $fieldscertificates, $limit, $include, $limitcertificates, $limitdevices));
    }

    public function profilesCreateInstance(ProfileCreateRequest $payload): Response
    {
        return $this->connector->send(new ProfilesCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsprofiles
     * @param  array<int, string>|null  $fieldsbundleIds
     * @param  array<int, string>|null  $fieldsdevices
     * @param  array<int, string>|null  $fieldscertificates
     * @param  array<int, string>|null  $include
     */
    public function profilesGetInstance(
        string $id,
        ?array $fieldsprofiles = null,
        ?array $fieldsbundleIds = null,
        ?array $fieldsdevices = null,
        ?array $fieldscertificates = null,
        ?array $include = null,
        ?int $limitcertificates = null,
        ?int $limitdevices = null,
    ): Response {
        return $this->connector->send(new ProfilesGetInstance($id, $fieldsprofiles, $fieldsbundleIds, $fieldsdevices, $fieldscertificates, $include, $limitcertificates, $limitdevices));
    }

    public function profilesDeleteInstance(string $id): Response
    {
        return $this->connector->send(new ProfilesDeleteInstance($id));
    }

    public function profilesBundleIdGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new ProfilesBundleIdGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsbundleIds
     */
    public function profilesBundleIdGetToOneRelated(string $id, ?array $fieldsbundleIds = null): Response
    {
        return $this->connector->send(new ProfilesBundleIdGetToOneRelated($id, $fieldsbundleIds));
    }

    public function profilesCertificatesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new ProfilesCertificatesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldscertificates
     */
    public function profilesCertificatesGetToManyRelated(
        string $id,
        ?array $fieldscertificates = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new ProfilesCertificatesGetToManyRelated($id, $fieldscertificates, $limit));
    }

    public function profilesDevicesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new ProfilesDevicesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsdevices
     */
    public function profilesDevicesGetToManyRelated(
        string $id,
        ?array $fieldsdevices = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new ProfilesDevicesGetToManyRelated($id, $fieldsdevices, $limit));
    }
}
