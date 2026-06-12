<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\MerchantIds;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * merchantIds_deleteInstance
 */
class MerchantIdsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/merchantIds/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
