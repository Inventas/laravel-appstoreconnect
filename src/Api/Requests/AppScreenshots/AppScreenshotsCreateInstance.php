<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppScreenshots;

use Inventas\AppStoreConnectKit\Api\Dto\AppScreenshotCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appScreenshots_createInstance
 */
class AppScreenshotsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/appScreenshots';
    }

    public function __construct(
        protected AppScreenshotCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
