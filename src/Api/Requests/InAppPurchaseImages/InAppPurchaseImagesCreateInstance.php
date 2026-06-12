<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseImages;

use Inventas\AppStoreConnectKit\Api\Dto\InAppPurchaseImageCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * inAppPurchaseImages_createInstance
 */
class InAppPurchaseImagesCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/inAppPurchaseImages';
    }

    public function __construct(
        protected InAppPurchaseImageCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
