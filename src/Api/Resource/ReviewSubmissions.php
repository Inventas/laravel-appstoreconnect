<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\ReviewSubmissionCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\ReviewSubmissionUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\ReviewSubmissions\ReviewSubmissionsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\ReviewSubmissions\ReviewSubmissionsGetCollection;
use Inventas\AppStoreConnectKit\Api\Requests\ReviewSubmissions\ReviewSubmissionsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\ReviewSubmissions\ReviewSubmissionsItemsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\ReviewSubmissions\ReviewSubmissionsItemsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\ReviewSubmissions\ReviewSubmissionsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class ReviewSubmissions extends BaseResource
{
    /**
     * @param  array<int, string>  $filterapp
     * @param  array<int, string>|null  $filterplatform
     * @param  array<int, string>|null  $filterstate
     * @param  array<int, string>|null  $fieldsreviewSubmissions
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsreviewSubmissionItems
     * @param  array<int, string>|null  $fieldsappStoreVersions
     * @param  array<int, string>|null  $fieldsactors
     * @param  array<int, string>|null  $include
     */
    public function reviewSubmissionsGetCollection(
        array $filterapp,
        ?array $filterplatform = null,
        ?array $filterstate = null,
        ?array $fieldsreviewSubmissions = null,
        ?array $fieldsapps = null,
        ?array $fieldsreviewSubmissionItems = null,
        ?array $fieldsappStoreVersions = null,
        ?array $fieldsactors = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limititems = null,
    ): Response {
        return $this->connector->send(new ReviewSubmissionsGetCollection($filterapp, $filterplatform, $filterstate, $fieldsreviewSubmissions, $fieldsapps, $fieldsreviewSubmissionItems, $fieldsappStoreVersions, $fieldsactors, $limit, $include, $limititems));
    }

    public function reviewSubmissionsCreateInstance(
        ReviewSubmissionCreateRequest $payload,
    ): Response {
        return $this->connector->send(new ReviewSubmissionsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsreviewSubmissions
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsreviewSubmissionItems
     * @param  array<int, string>|null  $fieldsappStoreVersions
     * @param  array<int, string>|null  $fieldsactors
     * @param  array<int, string>|null  $include
     */
    public function reviewSubmissionsGetInstance(
        string $id,
        ?array $fieldsreviewSubmissions = null,
        ?array $fieldsapps = null,
        ?array $fieldsreviewSubmissionItems = null,
        ?array $fieldsappStoreVersions = null,
        ?array $fieldsactors = null,
        ?array $include = null,
        ?int $limititems = null,
    ): Response {
        return $this->connector->send(new ReviewSubmissionsGetInstance($id, $fieldsreviewSubmissions, $fieldsapps, $fieldsreviewSubmissionItems, $fieldsappStoreVersions, $fieldsactors, $include, $limititems));
    }

    public function reviewSubmissionsUpdateInstance(
        string $id,
        ReviewSubmissionUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new ReviewSubmissionsUpdateInstance($id, $payload));
    }

    public function reviewSubmissionsItemsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new ReviewSubmissionsItemsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsreviewSubmissionItems
     * @param  array<int, string>|null  $fieldsappStoreVersions
     * @param  array<int, string>|null  $fieldsappCustomProductPageVersions
     * @param  array<int, string>|null  $fieldsappStoreVersionExperiments
     * @param  array<int, string>|null  $fieldsappEvents
     * @param  array<int, string>|null  $fieldsbackgroundAssetVersions
     * @param  array<int, string>|null  $fieldsgameCenterAchievementVersions
     * @param  array<int, string>|null  $fieldsgameCenterActivityVersions
     * @param  array<int, string>|null  $fieldsgameCenterChallengeVersions
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetVersions
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardVersions
     * @param  array<int, string>|null  $include
     */
    public function reviewSubmissionsItemsGetToManyRelated(
        string $id,
        ?array $fieldsreviewSubmissionItems = null,
        ?array $fieldsappStoreVersions = null,
        ?array $fieldsappCustomProductPageVersions = null,
        ?array $fieldsappStoreVersionExperiments = null,
        ?array $fieldsappEvents = null,
        ?array $fieldsbackgroundAssetVersions = null,
        ?array $fieldsgameCenterAchievementVersions = null,
        ?array $fieldsgameCenterActivityVersions = null,
        ?array $fieldsgameCenterChallengeVersions = null,
        ?array $fieldsgameCenterLeaderboardSetVersions = null,
        ?array $fieldsgameCenterLeaderboardVersions = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new ReviewSubmissionsItemsGetToManyRelated($id, $fieldsreviewSubmissionItems, $fieldsappStoreVersions, $fieldsappCustomProductPageVersions, $fieldsappStoreVersionExperiments, $fieldsappEvents, $fieldsbackgroundAssetVersions, $fieldsgameCenterAchievementVersions, $fieldsgameCenterActivityVersions, $fieldsgameCenterChallengeVersions, $fieldsgameCenterLeaderboardSetVersions, $fieldsgameCenterLeaderboardVersions, $limit, $include));
    }
}
