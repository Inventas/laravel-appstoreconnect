<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaAppClipInvocations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * betaAppClipInvocations_deleteInstance
 */
class BetaAppClipInvocationsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/betaAppClipInvocations/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
