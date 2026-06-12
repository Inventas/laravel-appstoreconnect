<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BuildUploads;

use Inventas\AppStoreConnectKit\Api\Dto\BuildUploadCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * buildUploads_createInstance
 */
class BuildUploadsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/buildUploads';
    }

    public function __construct(
        protected BuildUploadCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
