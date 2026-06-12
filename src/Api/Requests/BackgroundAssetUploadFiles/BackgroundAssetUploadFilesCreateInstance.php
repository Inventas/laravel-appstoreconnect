<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BackgroundAssetUploadFiles;

use Inventas\AppStoreConnectKit\Api\Dto\BackgroundAssetUploadFileCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * backgroundAssetUploadFiles_createInstance
 */
class BackgroundAssetUploadFilesCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/backgroundAssetUploadFiles';
    }

    public function __construct(
        protected BackgroundAssetUploadFileCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
