<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\BetaTesterAppsLinkagesRequest;
use Inventas\AppStoreConnectKit\Api\Dto\BetaTesterBetaGroupsLinkagesRequest;
use Inventas\AppStoreConnectKit\Api\Dto\BetaTesterBuildsLinkagesRequest;
use Inventas\AppStoreConnectKit\Api\Dto\BetaTesterCreateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\BetaTesters\BetaTestersAppsDeleteToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\BetaTesters\BetaTestersAppsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\BetaTesters\BetaTestersAppsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\BetaTesters\BetaTestersBetaGroupsCreateToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\BetaTesters\BetaTestersBetaGroupsDeleteToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\BetaTesters\BetaTestersBetaGroupsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\BetaTesters\BetaTestersBetaGroupsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\BetaTesters\BetaTestersBetaTesterUsagesGetMetrics;
use Inventas\AppStoreConnectKit\Api\Requests\BetaTesters\BetaTestersBuildsCreateToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\BetaTesters\BetaTestersBuildsDeleteToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\BetaTesters\BetaTestersBuildsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\BetaTesters\BetaTestersBuildsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\BetaTesters\BetaTestersCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\BetaTesters\BetaTestersDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\BetaTesters\BetaTestersGetCollection;
use Inventas\AppStoreConnectKit\Api\Requests\BetaTesters\BetaTestersGetInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class BetaTesters extends BaseResource
{
    /**
     * @param  array<int, string>|null  $filterfirstName
     * @param  array<int, string>|null  $filterlastName
     * @param  array<int, string>|null  $filteremail
     * @param  array<int, string>|null  $filterinviteType
     * @param  array<int, string>|null  $filterapps
     * @param  array<int, string>|null  $filterbetaGroups
     * @param  array<int, string>|null  $filterbuilds
     * @param  array<int, string>|null  $filterid
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldsbetaTesters
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsbetaGroups
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $include
     */
    public function betaTestersGetCollection(
        ?array $filterfirstName = null,
        ?array $filterlastName = null,
        ?array $filteremail = null,
        ?array $filterinviteType = null,
        ?array $filterapps = null,
        ?array $filterbetaGroups = null,
        ?array $filterbuilds = null,
        ?array $filterid = null,
        ?array $sort = null,
        ?array $fieldsbetaTesters = null,
        ?array $fieldsapps = null,
        ?array $fieldsbetaGroups = null,
        ?array $fieldsbuilds = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitapps = null,
        ?int $limitbetaGroups = null,
        ?int $limitbuilds = null,
    ): Response {
        return $this->connector->send(new BetaTestersGetCollection($filterfirstName, $filterlastName, $filteremail, $filterinviteType, $filterapps, $filterbetaGroups, $filterbuilds, $filterid, $sort, $fieldsbetaTesters, $fieldsapps, $fieldsbetaGroups, $fieldsbuilds, $limit, $include, $limitapps, $limitbetaGroups, $limitbuilds));
    }

    public function betaTestersCreateInstance(
        BetaTesterCreateRequest $payload,
    ): Response {
        return $this->connector->send(new BetaTestersCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsbetaTesters
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsbetaGroups
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $include
     */
    public function betaTestersGetInstance(
        string $id,
        ?array $fieldsbetaTesters = null,
        ?array $fieldsapps = null,
        ?array $fieldsbetaGroups = null,
        ?array $fieldsbuilds = null,
        ?array $include = null,
        ?int $limitapps = null,
        ?int $limitbetaGroups = null,
        ?int $limitbuilds = null,
    ): Response {
        return $this->connector->send(new BetaTestersGetInstance($id, $fieldsbetaTesters, $fieldsapps, $fieldsbetaGroups, $fieldsbuilds, $include, $limitapps, $limitbetaGroups, $limitbuilds));
    }

    public function betaTestersDeleteInstance(string $id): Response
    {
        return $this->connector->send(new BetaTestersDeleteInstance($id));
    }

    public function betaTestersAppsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new BetaTestersAppsGetToManyRelationship($id, $limit));
    }

    public function betaTestersAppsDeleteToManyRelationship(
        string $id,
        BetaTesterAppsLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new BetaTestersAppsDeleteToManyRelationship($id, $payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsapps
     */
    public function betaTestersAppsGetToManyRelated(string $id, ?array $fieldsapps = null, ?int $limit = null): Response
    {
        return $this->connector->send(new BetaTestersAppsGetToManyRelated($id, $fieldsapps, $limit));
    }

    public function betaTestersBetaGroupsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new BetaTestersBetaGroupsGetToManyRelationship($id, $limit));
    }

    public function betaTestersBetaGroupsCreateToManyRelationship(
        string $id,
        BetaTesterBetaGroupsLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new BetaTestersBetaGroupsCreateToManyRelationship($id, $payload));
    }

    public function betaTestersBetaGroupsDeleteToManyRelationship(
        string $id,
        BetaTesterBetaGroupsLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new BetaTestersBetaGroupsDeleteToManyRelationship($id, $payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsbetaGroups
     */
    public function betaTestersBetaGroupsGetToManyRelated(
        string $id,
        ?array $fieldsbetaGroups = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new BetaTestersBetaGroupsGetToManyRelated($id, $fieldsbetaGroups, $limit));
    }

    public function betaTestersBuildsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new BetaTestersBuildsGetToManyRelationship($id, $limit));
    }

    public function betaTestersBuildsCreateToManyRelationship(
        string $id,
        BetaTesterBuildsLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new BetaTestersBuildsCreateToManyRelationship($id, $payload));
    }

    public function betaTestersBuildsDeleteToManyRelationship(
        string $id,
        BetaTesterBuildsLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new BetaTestersBuildsDeleteToManyRelationship($id, $payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsbuilds
     */
    public function betaTestersBuildsGetToManyRelated(
        string $id,
        ?array $fieldsbuilds = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new BetaTestersBuildsGetToManyRelated($id, $fieldsbuilds, $limit));
    }

    public function betaTestersBetaTesterUsagesGetMetrics(
        string $id,
        string $filterapps,
        ?string $period = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new BetaTestersBetaTesterUsagesGetMetrics($id, $filterapps, $period, $limit));
    }
}
