<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaAppClipInvocationLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * betaAppClipInvocationLocalizations_deleteInstance
 */
class BetaAppClipInvocationLocalizationsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/betaAppClipInvocationLocalizations/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
