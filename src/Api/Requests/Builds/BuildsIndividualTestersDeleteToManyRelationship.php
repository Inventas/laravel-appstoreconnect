<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Builds;

use Inventas\AppStoreConnectKit\Api\Dto\BuildIndividualTestersLinkagesRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * builds_individualTesters_deleteToManyRelationship
 */
class BuildsIndividualTestersDeleteToManyRelationship extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/builds/{$this->id}/relationships/individualTesters";
    }

    public function __construct(
        protected string $id,
        protected BuildIndividualTestersLinkagesRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
