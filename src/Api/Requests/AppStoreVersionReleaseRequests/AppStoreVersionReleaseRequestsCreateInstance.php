<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionReleaseRequests;

use Inventas\AppStoreConnectKit\Api\Dto\AppStoreVersionReleaseRequestCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appStoreVersionReleaseRequests_createInstance
 */
class AppStoreVersionReleaseRequestsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/appStoreVersionReleaseRequests';
    }

    public function __construct(
        protected AppStoreVersionReleaseRequestCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
