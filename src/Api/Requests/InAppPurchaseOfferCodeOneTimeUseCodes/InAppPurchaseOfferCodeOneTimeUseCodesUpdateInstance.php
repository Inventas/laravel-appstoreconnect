<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseOfferCodeOneTimeUseCodes;

use Inventas\AppStoreConnectKit\Api\Dto\InAppPurchaseOfferCodeOneTimeUseCodeUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * inAppPurchaseOfferCodeOneTimeUseCodes_updateInstance
 */
class InAppPurchaseOfferCodeOneTimeUseCodesUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/inAppPurchaseOfferCodeOneTimeUseCodes/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected InAppPurchaseOfferCodeOneTimeUseCodeUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
