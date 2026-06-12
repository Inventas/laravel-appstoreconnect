<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersions;

use Inventas\AppStoreConnectKit\Api\Dto\AppStoreVersionCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appStoreVersions_createInstance
 */
class AppStoreVersionsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/appStoreVersions';
    }

    public function __construct(
        protected AppStoreVersionCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
