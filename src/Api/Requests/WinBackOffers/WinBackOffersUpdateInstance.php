<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\WinBackOffers;

use Inventas\AppStoreConnectKit\Api\Dto\WinBackOfferUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * winBackOffers_updateInstance
 */
class WinBackOffersUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/winBackOffers/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected WinBackOfferUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
