<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaAppClipInvocationLocalizations;

use Inventas\AppStoreConnectKit\Api\Dto\BetaAppClipInvocationLocalizationUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * betaAppClipInvocationLocalizations_updateInstance
 */
class BetaAppClipInvocationLocalizationsUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/betaAppClipInvocationLocalizations/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected BetaAppClipInvocationLocalizationUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
