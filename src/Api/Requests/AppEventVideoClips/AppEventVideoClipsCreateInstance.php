<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppEventVideoClips;

use Inventas\AppStoreConnectKit\Api\Dto\AppEventVideoClipCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appEventVideoClips_createInstance
 */
class AppEventVideoClipsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/appEventVideoClips';
    }

    public function __construct(
        protected AppEventVideoClipCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
