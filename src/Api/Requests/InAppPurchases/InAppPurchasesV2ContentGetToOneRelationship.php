<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\InAppPurchases;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * inAppPurchasesV2_content_getToOneRelationship
 */
class InAppPurchasesV2ContentGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v2/inAppPurchases/{$this->id}/relationships/content";
    }

    public function __construct(
        protected string $id,
    ) {}
}
