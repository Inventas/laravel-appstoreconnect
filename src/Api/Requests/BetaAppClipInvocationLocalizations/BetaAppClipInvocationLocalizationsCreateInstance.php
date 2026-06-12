<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaAppClipInvocationLocalizations;

use Inventas\AppStoreConnectKit\Api\Dto\BetaAppClipInvocationLocalizationCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * betaAppClipInvocationLocalizations_createInstance
 */
class BetaAppClipInvocationLocalizationsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/betaAppClipInvocationLocalizations';
    }

    public function __construct(
        protected BetaAppClipInvocationLocalizationCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
