<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\WinBackOffers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * winBackOffers_deleteInstance
 */
class WinBackOffersDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/winBackOffers/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
