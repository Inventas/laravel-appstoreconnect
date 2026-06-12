<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaAppLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * betaAppLocalizations_deleteInstance
 */
class BetaAppLocalizationsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/betaAppLocalizations/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
