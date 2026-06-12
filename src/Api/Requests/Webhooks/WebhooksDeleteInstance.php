<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Webhooks;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * webhooks_deleteInstance
 */
class WebhooksDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/webhooks/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
