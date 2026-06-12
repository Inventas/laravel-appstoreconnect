<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BackgroundAssets;

use Inventas\AppStoreConnectKit\Api\Dto\BackgroundAssetUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * backgroundAssets_updateInstance
 */
class BackgroundAssetsUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/backgroundAssets/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected BackgroundAssetUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
