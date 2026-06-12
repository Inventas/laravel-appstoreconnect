<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaFeedbackCrashSubmissions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * betaFeedbackCrashSubmissions_deleteInstance
 */
class BetaFeedbackCrashSubmissionsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/betaFeedbackCrashSubmissions/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
