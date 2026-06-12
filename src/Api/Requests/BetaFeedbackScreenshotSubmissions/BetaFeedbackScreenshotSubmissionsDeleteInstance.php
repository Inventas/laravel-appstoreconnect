<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaFeedbackScreenshotSubmissions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * betaFeedbackScreenshotSubmissions_deleteInstance
 */
class BetaFeedbackScreenshotSubmissionsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/betaFeedbackScreenshotSubmissions/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
