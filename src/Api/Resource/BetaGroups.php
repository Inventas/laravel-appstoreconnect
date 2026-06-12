<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\BetaGroupBetaTestersLinkagesRequest;
use Inventas\AppStoreConnectKit\Api\Dto\BetaGroupBuildsLinkagesRequest;
use Inventas\AppStoreConnectKit\Api\Dto\BetaGroupCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\BetaGroupUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\BetaGroups\BetaGroupsAppGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\BetaGroups\BetaGroupsAppGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\BetaGroups\BetaGroupsBetaRecruitmentCriteriaGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\BetaGroups\BetaGroupsBetaRecruitmentCriteriaGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\BetaGroups\BetaGroupsBetaRecruitmentCriterionCompatibleBuildCheckGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\BetaGroups\BetaGroupsBetaRecruitmentCriterionCompatibleBuildCheckGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\BetaGroups\BetaGroupsBetaTestersCreateToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\BetaGroups\BetaGroupsBetaTestersDeleteToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\BetaGroups\BetaGroupsBetaTestersGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\BetaGroups\BetaGroupsBetaTestersGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\BetaGroups\BetaGroupsBetaTesterUsagesGetMetrics;
use Inventas\AppStoreConnectKit\Api\Requests\BetaGroups\BetaGroupsBuildsCreateToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\BetaGroups\BetaGroupsBuildsDeleteToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\BetaGroups\BetaGroupsBuildsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\BetaGroups\BetaGroupsBuildsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\BetaGroups\BetaGroupsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\BetaGroups\BetaGroupsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\BetaGroups\BetaGroupsGetCollection;
use Inventas\AppStoreConnectKit\Api\Requests\BetaGroups\BetaGroupsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\BetaGroups\BetaGroupsPublicLinkUsagesGetMetrics;
use Inventas\AppStoreConnectKit\Api\Requests\BetaGroups\BetaGroupsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class BetaGroups extends BaseResource
{
    /**
     * @param  array<int, string>|null  $filtername
     * @param  array<int, string>|null  $filterisInternalGroup
     * @param  array<int, string>|null  $filterpublicLinkEnabled
     * @param  array<int, string>|null  $filterpublicLinkLimitEnabled
     * @param  array<int, string>|null  $filterpublicLink
     * @param  array<int, string>|null  $filterapp
     * @param  array<int, string>|null  $filterbuilds
     * @param  array<int, string>|null  $filterid
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldsbetaGroups
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $fieldsbetaTesters
     * @param  array<int, string>|null  $fieldsbetaRecruitmentCriteria
     * @param  array<int, string>|null  $include
     */
    public function betaGroupsGetCollection(
        ?array $filtername = null,
        ?array $filterisInternalGroup = null,
        ?array $filterpublicLinkEnabled = null,
        ?array $filterpublicLinkLimitEnabled = null,
        ?array $filterpublicLink = null,
        ?array $filterapp = null,
        ?array $filterbuilds = null,
        ?array $filterid = null,
        ?array $sort = null,
        ?array $fieldsbetaGroups = null,
        ?array $fieldsapps = null,
        ?array $fieldsbuilds = null,
        ?array $fieldsbetaTesters = null,
        ?array $fieldsbetaRecruitmentCriteria = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitbetaTesters = null,
        ?int $limitbuilds = null,
    ): Response {
        return $this->connector->send(new BetaGroupsGetCollection($filtername, $filterisInternalGroup, $filterpublicLinkEnabled, $filterpublicLinkLimitEnabled, $filterpublicLink, $filterapp, $filterbuilds, $filterid, $sort, $fieldsbetaGroups, $fieldsapps, $fieldsbuilds, $fieldsbetaTesters, $fieldsbetaRecruitmentCriteria, $limit, $include, $limitbetaTesters, $limitbuilds));
    }

    public function betaGroupsCreateInstance(
        BetaGroupCreateRequest $payload,
    ): Response {
        return $this->connector->send(new BetaGroupsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsbetaGroups
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $fieldsbetaTesters
     * @param  array<int, string>|null  $fieldsbetaRecruitmentCriteria
     * @param  array<int, string>|null  $include
     */
    public function betaGroupsGetInstance(
        string $id,
        ?array $fieldsbetaGroups = null,
        ?array $fieldsapps = null,
        ?array $fieldsbuilds = null,
        ?array $fieldsbetaTesters = null,
        ?array $fieldsbetaRecruitmentCriteria = null,
        ?array $include = null,
        ?int $limitbetaTesters = null,
        ?int $limitbuilds = null,
    ): Response {
        return $this->connector->send(new BetaGroupsGetInstance($id, $fieldsbetaGroups, $fieldsapps, $fieldsbuilds, $fieldsbetaTesters, $fieldsbetaRecruitmentCriteria, $include, $limitbetaTesters, $limitbuilds));
    }

    public function betaGroupsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new BetaGroupsDeleteInstance($id));
    }

    public function betaGroupsUpdateInstance(
        string $id,
        BetaGroupUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new BetaGroupsUpdateInstance($id, $payload));
    }

    public function betaGroupsAppGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new BetaGroupsAppGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsapps
     */
    public function betaGroupsAppGetToOneRelated(string $id, ?array $fieldsapps = null): Response
    {
        return $this->connector->send(new BetaGroupsAppGetToOneRelated($id, $fieldsapps));
    }

    public function betaGroupsBetaRecruitmentCriteriaGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new BetaGroupsBetaRecruitmentCriteriaGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsbetaRecruitmentCriteria
     */
    public function betaGroupsBetaRecruitmentCriteriaGetToOneRelated(
        string $id,
        ?array $fieldsbetaRecruitmentCriteria = null,
    ): Response {
        return $this->connector->send(new BetaGroupsBetaRecruitmentCriteriaGetToOneRelated($id, $fieldsbetaRecruitmentCriteria));
    }

    public function betaGroupsBetaRecruitmentCriterionCompatibleBuildCheckGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new BetaGroupsBetaRecruitmentCriterionCompatibleBuildCheckGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsbetaRecruitmentCriterionCompatibleBuildChecks
     */
    public function betaGroupsBetaRecruitmentCriterionCompatibleBuildCheckGetToOneRelated(
        string $id,
        ?array $fieldsbetaRecruitmentCriterionCompatibleBuildChecks = null,
    ): Response {
        return $this->connector->send(new BetaGroupsBetaRecruitmentCriterionCompatibleBuildCheckGetToOneRelated($id, $fieldsbetaRecruitmentCriterionCompatibleBuildChecks));
    }

    public function betaGroupsBetaTestersGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new BetaGroupsBetaTestersGetToManyRelationship($id, $limit));
    }

    public function betaGroupsBetaTestersCreateToManyRelationship(
        string $id,
        BetaGroupBetaTestersLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new BetaGroupsBetaTestersCreateToManyRelationship($id, $payload));
    }

    public function betaGroupsBetaTestersDeleteToManyRelationship(
        string $id,
        BetaGroupBetaTestersLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new BetaGroupsBetaTestersDeleteToManyRelationship($id, $payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsbetaTesters
     */
    public function betaGroupsBetaTestersGetToManyRelated(
        string $id,
        ?array $fieldsbetaTesters = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new BetaGroupsBetaTestersGetToManyRelated($id, $fieldsbetaTesters, $limit));
    }

    public function betaGroupsBuildsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new BetaGroupsBuildsGetToManyRelationship($id, $limit));
    }

    public function betaGroupsBuildsCreateToManyRelationship(
        string $id,
        BetaGroupBuildsLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new BetaGroupsBuildsCreateToManyRelationship($id, $payload));
    }

    public function betaGroupsBuildsDeleteToManyRelationship(
        string $id,
        BetaGroupBuildsLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new BetaGroupsBuildsDeleteToManyRelationship($id, $payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsbuilds
     */
    public function betaGroupsBuildsGetToManyRelated(
        string $id,
        ?array $fieldsbuilds = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new BetaGroupsBuildsGetToManyRelated($id, $fieldsbuilds, $limit));
    }

    /**
     * @param  array<int, string>|null  $groupBy
     */
    public function betaGroupsBetaTesterUsagesGetMetrics(
        string $id,
        ?string $period = null,
        ?array $groupBy = null,
        ?string $filterbetaTesters = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new BetaGroupsBetaTesterUsagesGetMetrics($id, $period, $groupBy, $filterbetaTesters, $limit));
    }

    public function betaGroupsPublicLinkUsagesGetMetrics(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new BetaGroupsPublicLinkUsagesGetMetrics($id, $limit));
    }
}
