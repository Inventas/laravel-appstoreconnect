<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\PassTypeIdCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\PassTypeIdUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\PassTypeIds\PassTypeIdsCertificatesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\PassTypeIds\PassTypeIdsCertificatesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\PassTypeIds\PassTypeIdsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\PassTypeIds\PassTypeIdsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\PassTypeIds\PassTypeIdsGetCollection;
use Inventas\AppStoreConnectKit\Api\Requests\PassTypeIds\PassTypeIdsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\PassTypeIds\PassTypeIdsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class PassTypeIds extends BaseResource
{
    /**
     * @param  array<int, string>|null  $filtername
     * @param  array<int, string>|null  $filteridentifier
     * @param  array<int, string>|null  $filterid
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldspassTypeIds
     * @param  array<int, string>|null  $fieldscertificates
     * @param  array<int, string>|null  $include
     */
    public function passTypeIdsGetCollection(
        ?array $filtername = null,
        ?array $filteridentifier = null,
        ?array $filterid = null,
        ?array $sort = null,
        ?array $fieldspassTypeIds = null,
        ?array $fieldscertificates = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitcertificates = null,
    ): Response {
        return $this->connector->send(new PassTypeIdsGetCollection($filtername, $filteridentifier, $filterid, $sort, $fieldspassTypeIds, $fieldscertificates, $limit, $include, $limitcertificates));
    }

    public function passTypeIdsCreateInstance(
        PassTypeIdCreateRequest $payload,
    ): Response {
        return $this->connector->send(new PassTypeIdsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldspassTypeIds
     * @param  array<int, string>|null  $fieldscertificates
     * @param  array<int, string>|null  $include
     */
    public function passTypeIdsGetInstance(
        string $id,
        ?array $fieldspassTypeIds = null,
        ?array $fieldscertificates = null,
        ?array $include = null,
        ?int $limitcertificates = null,
    ): Response {
        return $this->connector->send(new PassTypeIdsGetInstance($id, $fieldspassTypeIds, $fieldscertificates, $include, $limitcertificates));
    }

    public function passTypeIdsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new PassTypeIdsDeleteInstance($id));
    }

    public function passTypeIdsUpdateInstance(
        string $id,
        PassTypeIdUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new PassTypeIdsUpdateInstance($id, $payload));
    }

    public function passTypeIdsCertificatesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new PassTypeIdsCertificatesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterdisplayName
     * @param  array<int, string>|null  $filtercertificateType
     * @param  array<int, string>|null  $filterserialNumber
     * @param  array<int, string>|null  $filterid
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldscertificates
     * @param  array<int, string>|null  $fieldspassTypeIds
     * @param  array<int, string>|null  $include
     */
    public function passTypeIdsCertificatesGetToManyRelated(
        string $id,
        ?array $filterdisplayName = null,
        ?array $filtercertificateType = null,
        ?array $filterserialNumber = null,
        ?array $filterid = null,
        ?array $sort = null,
        ?array $fieldscertificates = null,
        ?array $fieldspassTypeIds = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new PassTypeIdsCertificatesGetToManyRelated($id, $filterdisplayName, $filtercertificateType, $filterserialNumber, $filterid, $sort, $fieldscertificates, $fieldspassTypeIds, $limit, $include));
    }
}
