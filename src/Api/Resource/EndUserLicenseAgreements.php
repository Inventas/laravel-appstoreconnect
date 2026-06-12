<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\EndUserLicenseAgreementCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\EndUserLicenseAgreementUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\EndUserLicenseAgreements\EndUserLicenseAgreementsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\EndUserLicenseAgreements\EndUserLicenseAgreementsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\EndUserLicenseAgreements\EndUserLicenseAgreementsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\EndUserLicenseAgreements\EndUserLicenseAgreementsTerritoriesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\EndUserLicenseAgreements\EndUserLicenseAgreementsTerritoriesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\EndUserLicenseAgreements\EndUserLicenseAgreementsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class EndUserLicenseAgreements extends BaseResource
{
    public function endUserLicenseAgreementsCreateInstance(
        EndUserLicenseAgreementCreateRequest $payload,
    ): Response {
        return $this->connector->send(new EndUserLicenseAgreementsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsendUserLicenseAgreements
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $include
     */
    public function endUserLicenseAgreementsGetInstance(
        string $id,
        ?array $fieldsendUserLicenseAgreements = null,
        ?array $fieldsapps = null,
        ?array $fieldsterritories = null,
        ?array $include = null,
        ?int $limitterritories = null,
    ): Response {
        return $this->connector->send(new EndUserLicenseAgreementsGetInstance($id, $fieldsendUserLicenseAgreements, $fieldsapps, $fieldsterritories, $include, $limitterritories));
    }

    public function endUserLicenseAgreementsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new EndUserLicenseAgreementsDeleteInstance($id));
    }

    public function endUserLicenseAgreementsUpdateInstance(
        string $id,
        EndUserLicenseAgreementUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new EndUserLicenseAgreementsUpdateInstance($id, $payload));
    }

    public function endUserLicenseAgreementsTerritoriesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new EndUserLicenseAgreementsTerritoriesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsterritories
     */
    public function endUserLicenseAgreementsTerritoriesGetToManyRelated(
        string $id,
        ?array $fieldsterritories = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new EndUserLicenseAgreementsTerritoriesGetToManyRelated($id, $fieldsterritories, $limit));
    }
}
