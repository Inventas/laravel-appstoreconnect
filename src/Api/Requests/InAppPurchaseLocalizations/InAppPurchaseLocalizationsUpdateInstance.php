<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseLocalizations;

use Inventas\AppStoreConnectKit\Api\Dto\InAppPurchaseLocalizationUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * inAppPurchaseLocalizations_updateInstance
 */
class InAppPurchaseLocalizationsUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/inAppPurchaseLocalizations/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected InAppPurchaseLocalizationUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
