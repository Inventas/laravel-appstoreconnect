<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionExperiments;

use Inventas\AppStoreConnectKit\Api\Dto\AppStoreVersionExperimentCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appStoreVersionExperiments_createInstance
 */
class AppStoreVersionExperimentsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/appStoreVersionExperiments';
    }

    public function __construct(
        protected AppStoreVersionExperimentCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
