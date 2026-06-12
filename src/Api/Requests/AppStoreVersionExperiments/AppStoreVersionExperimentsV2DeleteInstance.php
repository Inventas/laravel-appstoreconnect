<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionExperiments;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appStoreVersionExperimentsV2_deleteInstance
 */
class AppStoreVersionExperimentsV2DeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v2/appStoreVersionExperiments/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
