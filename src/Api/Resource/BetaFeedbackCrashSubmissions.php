<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Requests\BetaFeedbackCrashSubmissions\BetaFeedbackCrashSubmissionsCrashLogGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\BetaFeedbackCrashSubmissions\BetaFeedbackCrashSubmissionsCrashLogGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\BetaFeedbackCrashSubmissions\BetaFeedbackCrashSubmissionsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\BetaFeedbackCrashSubmissions\BetaFeedbackCrashSubmissionsGetInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class BetaFeedbackCrashSubmissions extends BaseResource
{
    /**
     * @param  array<int, string>|null  $fieldsbetaFeedbackCrashSubmissions
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $fieldsbetaTesters
     * @param  array<int, string>|null  $include
     */
    public function betaFeedbackCrashSubmissionsGetInstance(
        string $id,
        ?array $fieldsbetaFeedbackCrashSubmissions = null,
        ?array $fieldsbuilds = null,
        ?array $fieldsbetaTesters = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new BetaFeedbackCrashSubmissionsGetInstance($id, $fieldsbetaFeedbackCrashSubmissions, $fieldsbuilds, $fieldsbetaTesters, $include));
    }

    public function betaFeedbackCrashSubmissionsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new BetaFeedbackCrashSubmissionsDeleteInstance($id));
    }

    public function betaFeedbackCrashSubmissionsCrashLogGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new BetaFeedbackCrashSubmissionsCrashLogGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsbetaCrashLogs
     */
    public function betaFeedbackCrashSubmissionsCrashLogGetToOneRelated(
        string $id,
        ?array $fieldsbetaCrashLogs = null,
    ): Response {
        return $this->connector->send(new BetaFeedbackCrashSubmissionsCrashLogGetToOneRelated($id, $fieldsbetaCrashLogs));
    }
}
