<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseOfferCodeOneTimeUseCodes;

use Inventas\AppStoreConnectKit\Api\Dto\InAppPurchaseOfferCodeOneTimeUseCodeCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * inAppPurchaseOfferCodeOneTimeUseCodes_createInstance
 */
class InAppPurchaseOfferCodeOneTimeUseCodesCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/inAppPurchaseOfferCodeOneTimeUseCodes';
    }

    public function __construct(
        protected InAppPurchaseOfferCodeOneTimeUseCodeCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
