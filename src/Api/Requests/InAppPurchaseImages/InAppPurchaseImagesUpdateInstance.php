<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseImages;

use Inventas\AppStoreConnectKit\Api\Dto\InAppPurchaseImageUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * inAppPurchaseImages_updateInstance
 */
class InAppPurchaseImagesUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/inAppPurchaseImages/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected InAppPurchaseImageUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
