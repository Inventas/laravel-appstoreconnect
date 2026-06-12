<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaGroups;

use Inventas\AppStoreConnectKit\Api\Dto\BetaGroupBetaTestersLinkagesRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * betaGroups_betaTesters_deleteToManyRelationship
 */
class BetaGroupsBetaTestersDeleteToManyRelationship extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/betaGroups/{$this->id}/relationships/betaTesters";
    }

    public function __construct(
        protected string $id,
        protected BetaGroupBetaTestersLinkagesRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
