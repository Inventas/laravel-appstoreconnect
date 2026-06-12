<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AlternativeDistributionDomains;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * alternativeDistributionDomains_deleteInstance
 */
class AlternativeDistributionDomainsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/alternativeDistributionDomains/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
