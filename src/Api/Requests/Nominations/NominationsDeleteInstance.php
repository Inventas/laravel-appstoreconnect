<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Nominations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * nominations_deleteInstance
 */
class NominationsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/nominations/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
