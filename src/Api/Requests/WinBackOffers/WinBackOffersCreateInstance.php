<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\WinBackOffers;

use Inventas\AppStoreConnectKit\Api\Dto\WinBackOfferCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * winBackOffers_createInstance
 */
class WinBackOffersCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/winBackOffers';
    }

    public function __construct(
        protected WinBackOfferCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
