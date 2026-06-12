<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaTesters;

use Inventas\AppStoreConnectKit\Api\Dto\BetaTesterAppsLinkagesRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * betaTesters_apps_deleteToManyRelationship
 */
class BetaTestersAppsDeleteToManyRelationship extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/betaTesters/{$this->id}/relationships/apps";
    }

    public function __construct(
        protected string $id,
        protected BetaTesterAppsLinkagesRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
