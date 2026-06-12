<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\BetaAppReviewSubmissionCreateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\BetaAppReviewSubmissions\BetaAppReviewSubmissionsBuildGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\BetaAppReviewSubmissions\BetaAppReviewSubmissionsBuildGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\BetaAppReviewSubmissions\BetaAppReviewSubmissionsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\BetaAppReviewSubmissions\BetaAppReviewSubmissionsGetCollection;
use Inventas\AppStoreConnectKit\Api\Requests\BetaAppReviewSubmissions\BetaAppReviewSubmissionsGetInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class BetaAppReviewSubmissions extends BaseResource
{
    /**
     * @param  array<int, string>  $filterbuild
     * @param  array<int, string>|null  $filterbetaReviewState
     * @param  array<int, string>|null  $fieldsbetaAppReviewSubmissions
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $include
     */
    public function betaAppReviewSubmissionsGetCollection(
        array $filterbuild,
        ?array $filterbetaReviewState = null,
        ?array $fieldsbetaAppReviewSubmissions = null,
        ?array $fieldsbuilds = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new BetaAppReviewSubmissionsGetCollection($filterbuild, $filterbetaReviewState, $fieldsbetaAppReviewSubmissions, $fieldsbuilds, $limit, $include));
    }

    public function betaAppReviewSubmissionsCreateInstance(
        BetaAppReviewSubmissionCreateRequest $payload,
    ): Response {
        return $this->connector->send(new BetaAppReviewSubmissionsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsbetaAppReviewSubmissions
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $include
     */
    public function betaAppReviewSubmissionsGetInstance(
        string $id,
        ?array $fieldsbetaAppReviewSubmissions = null,
        ?array $fieldsbuilds = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new BetaAppReviewSubmissionsGetInstance($id, $fieldsbetaAppReviewSubmissions, $fieldsbuilds, $include));
    }

    public function betaAppReviewSubmissionsBuildGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new BetaAppReviewSubmissionsBuildGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsbuilds
     */
    public function betaAppReviewSubmissionsBuildGetToOneRelated(string $id, ?array $fieldsbuilds = null): Response
    {
        return $this->connector->send(new BetaAppReviewSubmissionsBuildGetToOneRelated($id, $fieldsbuilds));
    }
}
