<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaAppLocalizations;

use Inventas\AppStoreConnectKit\Api\Dto\BetaAppLocalizationCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * betaAppLocalizations_createInstance
 */
class BetaAppLocalizationsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/betaAppLocalizations';
    }

    public function __construct(
        protected BetaAppLocalizationCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
