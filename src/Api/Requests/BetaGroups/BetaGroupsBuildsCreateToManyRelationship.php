<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaGroups;

use Inventas\AppStoreConnectKit\Api\Dto\BetaGroupBuildsLinkagesRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * betaGroups_builds_createToManyRelationship
 */
class BetaGroupsBuildsCreateToManyRelationship extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/v1/betaGroups/{$this->id}/relationships/builds";
    }

    public function __construct(
        protected string $id,
        protected BetaGroupBuildsLinkagesRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
