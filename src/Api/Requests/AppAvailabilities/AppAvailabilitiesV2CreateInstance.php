<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppAvailabilities;

use Inventas\AppStoreConnectKit\Api\Dto\AppAvailabilityV2createRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appAvailabilitiesV2_createInstance
 */
class AppAvailabilitiesV2CreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v2/appAvailabilities';
    }

    public function __construct(
        protected AppAvailabilityV2createRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
