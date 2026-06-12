<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BackgroundAssetUploadFiles;

use Inventas\AppStoreConnectKit\Api\Dto\BackgroundAssetUploadFileUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * backgroundAssetUploadFiles_updateInstance
 */
class BackgroundAssetUploadFilesUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/backgroundAssetUploadFiles/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected BackgroundAssetUploadFileUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
