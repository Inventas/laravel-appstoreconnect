<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * inAppPurchaseLocalizations_deleteInstance
 */
class InAppPurchaseLocalizationsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/inAppPurchaseLocalizations/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
