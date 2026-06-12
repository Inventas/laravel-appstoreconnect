<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Requests\CiBuildActions\CiBuildActionsArtifactsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\CiBuildActions\CiBuildActionsArtifactsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\CiBuildActions\CiBuildActionsBuildRunGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\CiBuildActions\CiBuildActionsBuildRunGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\CiBuildActions\CiBuildActionsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\CiBuildActions\CiBuildActionsIssuesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\CiBuildActions\CiBuildActionsIssuesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\CiBuildActions\CiBuildActionsTestResultsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\CiBuildActions\CiBuildActionsTestResultsGetToManyRelationship;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class CiBuildActions extends BaseResource
{
    /**
     * @param  array<int, string>|null  $fieldsciBuildActions
     * @param  array<int, string>|null  $fieldsciBuildRuns
     * @param  array<int, string>|null  $include
     */
    public function ciBuildActionsGetInstance(
        string $id,
        ?array $fieldsciBuildActions = null,
        ?array $fieldsciBuildRuns = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new CiBuildActionsGetInstance($id, $fieldsciBuildActions, $fieldsciBuildRuns, $include));
    }

    public function ciBuildActionsArtifactsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new CiBuildActionsArtifactsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsciArtifacts
     */
    public function ciBuildActionsArtifactsGetToManyRelated(
        string $id,
        ?array $fieldsciArtifacts = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new CiBuildActionsArtifactsGetToManyRelated($id, $fieldsciArtifacts, $limit));
    }

    public function ciBuildActionsBuildRunGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new CiBuildActionsBuildRunGetToOneRelationship($id));
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
    public function ciBuildActionsBuildRunGetToOneRelated(
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
        return $this->connector->send(new CiBuildActionsBuildRunGetToOneRelated($id, $fieldsciBuildRuns, $fieldsbuilds, $fieldsciWorkflows, $fieldsciProducts, $fieldsscmGitReferences, $fieldsscmPullRequests, $include, $limitbuilds));
    }

    public function ciBuildActionsIssuesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new CiBuildActionsIssuesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsciIssues
     */
    public function ciBuildActionsIssuesGetToManyRelated(
        string $id,
        ?array $fieldsciIssues = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new CiBuildActionsIssuesGetToManyRelated($id, $fieldsciIssues, $limit));
    }

    public function ciBuildActionsTestResultsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new CiBuildActionsTestResultsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsciTestResults
     */
    public function ciBuildActionsTestResultsGetToManyRelated(
        string $id,
        ?array $fieldsciTestResults = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new CiBuildActionsTestResultsGetToManyRelated($id, $fieldsciTestResults, $limit));
    }
}
