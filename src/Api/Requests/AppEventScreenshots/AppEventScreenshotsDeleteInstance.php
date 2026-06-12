<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppEventScreenshots;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appEventScreenshots_deleteInstance
 */
class AppEventScreenshotsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/appEventScreenshots/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
