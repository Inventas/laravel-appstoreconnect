<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppEventScreenshots;

use Inventas\AppStoreConnectKit\Api\Dto\AppEventScreenshotCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appEventScreenshots_createInstance
 */
class AppEventScreenshotsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/appEventScreenshots';
    }

    public function __construct(
        protected AppEventScreenshotCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
