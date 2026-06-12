<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\CertificateCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\CertificateUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\Certificates\CertificatesCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\Certificates\CertificatesDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\Certificates\CertificatesGetCollection;
use Inventas\AppStoreConnectKit\Api\Requests\Certificates\CertificatesGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\Certificates\CertificatesPassTypeIdGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Certificates\CertificatesPassTypeIdGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Certificates\CertificatesUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Certificates extends BaseResource
{
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
    public function certificatesGetCollection(
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
        return $this->connector->send(new CertificatesGetCollection($filterdisplayName, $filtercertificateType, $filterserialNumber, $filterid, $sort, $fieldscertificates, $fieldspassTypeIds, $limit, $include));
    }

    public function certificatesCreateInstance(
        CertificateCreateRequest $payload,
    ): Response {
        return $this->connector->send(new CertificatesCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldscertificates
     * @param  array<int, string>|null  $fieldspassTypeIds
     * @param  array<int, string>|null  $include
     */
    public function certificatesGetInstance(
        string $id,
        ?array $fieldscertificates = null,
        ?array $fieldspassTypeIds = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new CertificatesGetInstance($id, $fieldscertificates, $fieldspassTypeIds, $include));
    }

    public function certificatesDeleteInstance(string $id): Response
    {
        return $this->connector->send(new CertificatesDeleteInstance($id));
    }

    public function certificatesUpdateInstance(
        string $id,
        CertificateUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new CertificatesUpdateInstance($id, $payload));
    }

    public function certificatesPassTypeIdGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new CertificatesPassTypeIdGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldspassTypeIds
     * @param  array<int, string>|null  $fieldscertificates
     * @param  array<int, string>|null  $include
     */
    public function certificatesPassTypeIdGetToOneRelated(
        string $id,
        ?array $fieldspassTypeIds = null,
        ?array $fieldscertificates = null,
        ?array $include = null,
        ?int $limitcertificates = null,
    ): Response {
        return $this->connector->send(new CertificatesPassTypeIdGetToOneRelated($id, $fieldspassTypeIds, $fieldscertificates, $include, $limitcertificates));
    }
}
