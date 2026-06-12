<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Apps;

use Inventas\AppStoreConnectKit\Api\Dto\AppBetaTestersLinkagesRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * apps_betaTesters_deleteToManyRelationship
 */
class AppsBetaTestersDeleteToManyRelationship extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/apps/{$this->id}/relationships/betaTesters";
    }

    public function __construct(
        protected string $id,
        protected AppBetaTestersLinkagesRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
