<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppCustomProductPages;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appCustomProductPages_deleteInstance
 */
class AppCustomProductPagesDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/appCustomProductPages/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
