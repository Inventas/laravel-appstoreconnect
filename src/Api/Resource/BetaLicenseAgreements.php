<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\BetaLicenseAgreementUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\BetaLicenseAgreements\BetaLicenseAgreementsAppGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\BetaLicenseAgreements\BetaLicenseAgreementsAppGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\BetaLicenseAgreements\BetaLicenseAgreementsGetCollection;
use Inventas\AppStoreConnectKit\Api\Requests\BetaLicenseAgreements\BetaLicenseAgreementsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\BetaLicenseAgreements\BetaLicenseAgreementsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class BetaLicenseAgreements extends BaseResource
{
    /**
     * @param  array<int, string>|null  $filterapp
     * @param  array<int, string>|null  $fieldsbetaLicenseAgreements
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $include
     */
    public function betaLicenseAgreementsGetCollection(
        ?array $filterapp = null,
        ?array $fieldsbetaLicenseAgreements = null,
        ?array $fieldsapps = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new BetaLicenseAgreementsGetCollection($filterapp, $fieldsbetaLicenseAgreements, $fieldsapps, $limit, $include));
    }

    /**
     * @param  array<int, string>|null  $fieldsbetaLicenseAgreements
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $include
     */
    public function betaLicenseAgreementsGetInstance(
        string $id,
        ?array $fieldsbetaLicenseAgreements = null,
        ?array $fieldsapps = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new BetaLicenseAgreementsGetInstance($id, $fieldsbetaLicenseAgreements, $fieldsapps, $include));
    }

    public function betaLicenseAgreementsUpdateInstance(
        string $id,
        BetaLicenseAgreementUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new BetaLicenseAgreementsUpdateInstance($id, $payload));
    }

    public function betaLicenseAgreementsAppGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new BetaLicenseAgreementsAppGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsapps
     */
    public function betaLicenseAgreementsAppGetToOneRelated(string $id, ?array $fieldsapps = null): Response
    {
        return $this->connector->send(new BetaLicenseAgreementsAppGetToOneRelated($id, $fieldsapps));
    }
}
