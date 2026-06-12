<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppScreenshots;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appScreenshots_deleteInstance
 */
class AppScreenshotsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/appScreenshots/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
