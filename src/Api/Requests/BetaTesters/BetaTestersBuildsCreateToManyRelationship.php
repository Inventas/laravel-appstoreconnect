<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaTesters;

use Inventas\AppStoreConnectKit\Api\Dto\BetaTesterBuildsLinkagesRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * betaTesters_builds_createToManyRelationship
 */
class BetaTestersBuildsCreateToManyRelationship extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/v1/betaTesters/{$this->id}/relationships/builds";
    }

    public function __construct(
        protected string $id,
        protected BetaTesterBuildsLinkagesRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
