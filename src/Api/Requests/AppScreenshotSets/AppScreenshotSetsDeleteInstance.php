<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppScreenshotSets;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appScreenshotSets_deleteInstance
 */
class AppScreenshotSetsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/appScreenshotSets/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
