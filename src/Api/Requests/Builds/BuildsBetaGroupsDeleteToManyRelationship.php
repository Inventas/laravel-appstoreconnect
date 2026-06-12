<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Builds;

use Inventas\AppStoreConnectKit\Api\Dto\BuildBetaGroupsLinkagesRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * builds_betaGroups_deleteToManyRelationship
 */
class BuildsBetaGroupsDeleteToManyRelationship extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/builds/{$this->id}/relationships/betaGroups";
    }

    public function __construct(
        protected string $id,
        protected BuildBetaGroupsLinkagesRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
