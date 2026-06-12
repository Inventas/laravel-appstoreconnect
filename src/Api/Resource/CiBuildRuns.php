<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\CiBuildRunCreateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\CiBuildRuns\CiBuildRunsActionsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\CiBuildRuns\CiBuildRunsActionsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\CiBuildRuns\CiBuildRunsBuildsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\CiBuildRuns\CiBuildRunsBuildsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\CiBuildRuns\CiBuildRunsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\CiBuildRuns\CiBuildRunsGetInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class CiBuildRuns extends BaseResource
{
    public function ciBuildRunsCreateInstance(
        CiBuildRunCreateRequest $payload,
    ): Response {
        return $this->connector->send(new CiBuildRunsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsciBuildRuns
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $fieldsciWorkflows
     * @param  array<int, string>|null  $fieldsciProducts
     * @param  array<int, string>|null  $fieldsscmGitReferences
     * @param  array<int, string>|null  $fieldsscmPullRequests
     * @param  array<int, string>|null  $include
     */
    public function ciBuildRunsGetInstance(
        string $id,
        ?array $fieldsciBuildRuns = null,
        ?array $fieldsbuilds = null,
        ?array $fieldsciWorkflows = null,
        ?array $fieldsciProducts = null,
        ?array $fieldsscmGitReferences = null,
        ?array $fieldsscmPullRequests = null,
        ?array $include = null,
        ?int $limitbuilds = null,
    ): Response {
        return $this->connector->send(new CiBuildRunsGetInstance($id, $fieldsciBuildRuns, $fieldsbuilds, $fieldsciWorkflows, $fieldsciProducts, $fieldsscmGitReferences, $fieldsscmPullRequests, $include, $limitbuilds));
    }

    public function ciBuildRunsActionsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new CiBuildRunsActionsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsciBuildActions
     * @param  array<int, string>|null  $fieldsciBuildRuns
     * @param  array<int, string>|null  $include
     */
    public function ciBuildRunsActionsGetToManyRelated(
        string $id,
        ?array $fieldsciBuildActions = null,
        ?array $fieldsciBuildRuns = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new CiBuildRunsActionsGetToManyRelated($id, $fieldsciBuildActions, $fieldsciBuildRuns, $limit, $include));
    }

    public function ciBuildRunsBuildsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new CiBuildRunsBuildsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterversion
     * @param  array<int, string>|null  $filterexpired
     * @param  array<int, string>|null  $filterprocessingState
     * @param  array<int, string>|null  $filterbetaAppReviewSubmissionBetaReviewState
     * @param  array<int, string>|null  $filterusesNonExemptEncryption
     * @param  array<int, string>|null  $filterpreReleaseVersionVersion
     * @param  array<int, string>|null  $filterpreReleaseVersionPlatform
     * @param  array<int, string>|null  $filterbuildAudienceType
     * @param  array<int, string>|null  $filterpreReleaseVersion
     * @param  array<int, string>|null  $filterapp
     * @param  array<int, string>|null  $filterbetaGroups
     * @param  array<int, string>|null  $filterappStoreVersion
     * @param  array<int, string>|null  $filterid
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $fieldspreReleaseVersions
     * @param  array<int, string>|null  $fieldsbetaTesters
     * @param  array<int, string>|null  $fieldsbetaGroups
     * @param  array<int, string>|null  $fieldsbetaBuildLocalizations
     * @param  array<int, string>|null  $fieldsappEncryptionDeclarations
     * @param  array<int, string>|null  $fieldsbetaAppReviewSubmissions
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsbuildBetaDetails
     * @param  array<int, string>|null  $fieldsappStoreVersions
     * @param  array<int, string>|null  $fieldsbuildIcons
     * @param  array<int, string>|null  $fieldsbuildBundles
     * @param  array<int, string>|null  $fieldsbuildUploads
     * @param  array<int, string>|null  $include
     */
    public function ciBuildRunsBuildsGetToManyRelated(
        string $id,
        ?array $filterversion = null,
        ?array $filterexpired = null,
        ?array $filterprocessingState = null,
        ?array $filterbetaAppReviewSubmissionBetaReviewState = null,
        ?array $filterusesNonExemptEncryption = null,
        ?array $filterpreReleaseVersionVersion = null,
        ?array $filterpreReleaseVersionPlatform = null,
        ?array $filterbuildAudienceType = null,
        ?array $filterpreReleaseVersion = null,
        ?array $filterapp = null,
        ?array $filterbetaGroups = null,
        ?array $filterappStoreVersion = null,
        ?array $filterid = null,
        ?bool $existsusesNonExemptEncryption = null,
        ?array $sort = null,
        ?array $fieldsbuilds = null,
        ?array $fieldspreReleaseVersions = null,
        ?array $fieldsbetaTesters = null,
        ?array $fieldsbetaGroups = null,
        ?array $fieldsbetaBuildLocalizations = null,
        ?array $fieldsappEncryptionDeclarations = null,
        ?array $fieldsbetaAppReviewSubmissions = null,
        ?array $fieldsapps = null,
        ?array $fieldsbuildBetaDetails = null,
        ?array $fieldsappStoreVersions = null,
        ?array $fieldsbuildIcons = null,
        ?array $fieldsbuildBundles = null,
        ?array $fieldsbuildUploads = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitindividualTesters = null,
        ?int $limitbetaGroups = null,
        ?int $limitbetaBuildLocalizations = null,
        ?int $limiticons = null,
        ?int $limitbuildBundles = null,
    ): Response {
        return $this->connector->send(new CiBuildRunsBuildsGetToManyRelated($id, $filterversion, $filterexpired, $filterprocessingState, $filterbetaAppReviewSubmissionBetaReviewState, $filterusesNonExemptEncryption, $filterpreReleaseVersionVersion, $filterpreReleaseVersionPlatform, $filterbuildAudienceType, $filterpreReleaseVersion, $filterapp, $filterbetaGroups, $filterappStoreVersion, $filterid, $existsusesNonExemptEncryption, $sort, $fieldsbuilds, $fieldspreReleaseVersions, $fieldsbetaTesters, $fieldsbetaGroups, $fieldsbetaBuildLocalizations, $fieldsappEncryptionDeclarations, $fieldsbetaAppReviewSubmissions, $fieldsapps, $fieldsbuildBetaDetails, $fieldsappStoreVersions, $fieldsbuildIcons, $fieldsbuildBundles, $fieldsbuildUploads, $limit, $include, $limitindividualTesters, $limitbetaGroups, $limitbetaBuildLocalizations, $limiticons, $limitbuildBundles));
    }
}
