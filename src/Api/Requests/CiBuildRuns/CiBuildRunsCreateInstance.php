<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\CiBuildRuns;

use Inventas\AppStoreConnectKit\Api\Dto\CiBuildRunCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * ciBuildRuns_createInstance
 */
class CiBuildRunsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/ciBuildRuns';
    }

    public function __construct(
        protected CiBuildRunCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
