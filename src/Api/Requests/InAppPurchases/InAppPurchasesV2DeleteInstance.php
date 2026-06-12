<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\InAppPurchases;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * inAppPurchasesV2_deleteInstance
 */
class InAppPurchasesV2DeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v2/inAppPurchases/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
