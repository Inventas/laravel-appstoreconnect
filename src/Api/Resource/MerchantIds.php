<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\MerchantIdCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\MerchantIdUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\MerchantIds\MerchantIdsCertificatesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\MerchantIds\MerchantIdsCertificatesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\MerchantIds\MerchantIdsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\MerchantIds\MerchantIdsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\MerchantIds\MerchantIdsGetCollection;
use Inventas\AppStoreConnectKit\Api\Requests\MerchantIds\MerchantIdsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\MerchantIds\MerchantIdsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class MerchantIds extends BaseResource
{
    /**
     * @param  array<int, string>|null  $filtername
     * @param  array<int, string>|null  $filteridentifier
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldsmerchantIds
     * @param  array<int, string>|null  $fieldscertificates
     * @param  array<int, string>|null  $include
     */
    public function merchantIdsGetCollection(
        ?array $filtername = null,
        ?array $filteridentifier = null,
        ?array $sort = null,
        ?array $fieldsmerchantIds = null,
        ?array $fieldscertificates = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitcertificates = null,
    ): Response {
        return $this->connector->send(new MerchantIdsGetCollection($filtername, $filteridentifier, $sort, $fieldsmerchantIds, $fieldscertificates, $limit, $include, $limitcertificates));
    }

    public function merchantIdsCreateInstance(
        MerchantIdCreateRequest $payload,
    ): Response {
        return $this->connector->send(new MerchantIdsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsmerchantIds
     * @param  array<int, string>|null  $fieldscertificates
     * @param  array<int, string>|null  $include
     */
    public function merchantIdsGetInstance(
        string $id,
        ?array $fieldsmerchantIds = null,
        ?array $fieldscertificates = null,
        ?array $include = null,
        ?int $limitcertificates = null,
    ): Response {
        return $this->connector->send(new MerchantIdsGetInstance($id, $fieldsmerchantIds, $fieldscertificates, $include, $limitcertificates));
    }

    public function merchantIdsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new MerchantIdsDeleteInstance($id));
    }

    public function merchantIdsUpdateInstance(
        string $id,
        MerchantIdUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new MerchantIdsUpdateInstance($id, $payload));
    }

    public function merchantIdsCertificatesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new MerchantIdsCertificatesGetToManyRelationship($id, $limit));
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
    public function merchantIdsCertificatesGetToManyRelated(
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
        return $this->connector->send(new MerchantIdsCertificatesGetToManyRelated($id, $filterdisplayName, $filtercertificateType, $filterserialNumber, $filterid, $sort, $fieldscertificates, $fieldspassTypeIds, $limit, $include));
    }
}
