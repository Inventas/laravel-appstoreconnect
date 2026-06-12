<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaBuildLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * betaBuildLocalizations_deleteInstance
 */
class BetaBuildLocalizationsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/betaBuildLocalizations/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
