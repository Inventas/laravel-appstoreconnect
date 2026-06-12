<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\MarketplaceSearchDetails;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * marketplaceSearchDetails_deleteInstance
 */
class MarketplaceSearchDetailsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/marketplaceSearchDetails/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
