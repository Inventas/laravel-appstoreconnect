<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaTesters;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * betaTesters_deleteInstance
 */
class BetaTestersDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/betaTesters/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
