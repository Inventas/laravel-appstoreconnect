<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaBuildLocalizations;

use Inventas\AppStoreConnectKit\Api\Dto\BetaBuildLocalizationUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * betaBuildLocalizations_updateInstance
 */
class BetaBuildLocalizationsUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/betaBuildLocalizations/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected BetaBuildLocalizationUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
