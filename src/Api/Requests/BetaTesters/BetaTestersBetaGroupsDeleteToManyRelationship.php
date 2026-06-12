<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaTesters;

use Inventas\AppStoreConnectKit\Api\Dto\BetaTesterBetaGroupsLinkagesRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * betaTesters_betaGroups_deleteToManyRelationship
 */
class BetaTestersBetaGroupsDeleteToManyRelationship extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/betaTesters/{$this->id}/relationships/betaGroups";
    }

    public function __construct(
        protected string $id,
        protected BetaTesterBetaGroupsLinkagesRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
