<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BackgroundAssetVersions;

use Inventas\AppStoreConnectKit\Api\Dto\BackgroundAssetVersionCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * backgroundAssetVersions_createInstance
 */
class BackgroundAssetVersionsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/backgroundAssetVersions';
    }

    public function __construct(
        protected BackgroundAssetVersionCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
