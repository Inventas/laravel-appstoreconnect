<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Requests\BetaFeedbackScreenshotSubmissions\BetaFeedbackScreenshotSubmissionsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\BetaFeedbackScreenshotSubmissions\BetaFeedbackScreenshotSubmissionsGetInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class BetaFeedbackScreenshotSubmissions extends BaseResource
{
    /**
     * @param  array<int, string>|null  $fieldsbetaFeedbackScreenshotSubmissions
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $fieldsbetaTesters
     * @param  array<int, string>|null  $include
     */
    public function betaFeedbackScreenshotSubmissionsGetInstance(
        string $id,
        ?array $fieldsbetaFeedbackScreenshotSubmissions = null,
        ?array $fieldsbuilds = null,
        ?array $fieldsbetaTesters = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new BetaFeedbackScreenshotSubmissionsGetInstance($id, $fieldsbetaFeedbackScreenshotSubmissions, $fieldsbuilds, $fieldsbetaTesters, $include));
    }

    public function betaFeedbackScreenshotSubmissionsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new BetaFeedbackScreenshotSubmissionsDeleteInstance($id));
    }
}
