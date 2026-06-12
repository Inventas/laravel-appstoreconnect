<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseLocalizations;

use Inventas\AppStoreConnectKit\Api\Dto\InAppPurchaseLocalizationCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * inAppPurchaseLocalizations_createInstance
 */
class InAppPurchaseLocalizationsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/inAppPurchaseLocalizations';
    }

    public function __construct(
        protected InAppPurchaseLocalizationCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
