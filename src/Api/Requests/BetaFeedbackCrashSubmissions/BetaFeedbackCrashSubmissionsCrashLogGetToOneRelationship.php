<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaFeedbackCrashSubmissions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * betaFeedbackCrashSubmissions_crashLog_getToOneRelationship
 */
class BetaFeedbackCrashSubmissionsCrashLogGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/betaFeedbackCrashSubmissions/{$this->id}/relationships/crashLog";
    }

    public function __construct(
        protected string $id,
    ) {}
}
