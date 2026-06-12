<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaGroups;

use Inventas\AppStoreConnectKit\Api\Dto\BetaGroupCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * betaGroups_createInstance
 */
class BetaGroupsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/betaGroups';
    }

    public function __construct(
        protected BetaGroupCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
