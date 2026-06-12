<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppEvents;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appEvents_deleteInstance
 */
class AppEventsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/appEvents/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
