<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaGroups;

use Inventas\AppStoreConnectKit\Api\Dto\BetaGroupUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * betaGroups_updateInstance
 */
class BetaGroupsUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/betaGroups/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected BetaGroupUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
