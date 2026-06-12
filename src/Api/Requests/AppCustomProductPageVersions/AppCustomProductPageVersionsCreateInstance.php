<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppCustomProductPageVersions;

use Inventas\AppStoreConnectKit\Api\Dto\AppCustomProductPageVersionCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appCustomProductPageVersions_createInstance
 */
class AppCustomProductPageVersionsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/appCustomProductPageVersions';
    }

    public function __construct(
        protected AppCustomProductPageVersionCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
