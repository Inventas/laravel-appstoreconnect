<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionExperiments;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appStoreVersionExperiments_deleteInstance
 */
class AppStoreVersionExperimentsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/appStoreVersionExperiments/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
