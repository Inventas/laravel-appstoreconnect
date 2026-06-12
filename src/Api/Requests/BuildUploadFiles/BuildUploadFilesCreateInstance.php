<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BuildUploadFiles;

use Inventas\AppStoreConnectKit\Api\Dto\BuildUploadFileCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * buildUploadFiles_createInstance
 */
class BuildUploadFilesCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/buildUploadFiles';
    }

    public function __construct(
        protected BuildUploadFileCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
