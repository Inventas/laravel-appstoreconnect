<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\PromotedPurchases;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * promotedPurchases_deleteInstance
 */
class PromotedPurchasesDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/promotedPurchases/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
