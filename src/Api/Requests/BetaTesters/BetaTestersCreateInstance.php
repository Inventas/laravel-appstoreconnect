<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaTesters;

use Inventas\AppStoreConnectKit\Api\Dto\BetaTesterCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * betaTesters_createInstance
 */
class BetaTestersCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/betaTesters';
    }

    public function __construct(
        protected BetaTesterCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
