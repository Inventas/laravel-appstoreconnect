<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseImages;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * inAppPurchaseImages_deleteInstance
 */
class InAppPurchaseImagesDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/inAppPurchaseImages/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
