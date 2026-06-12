<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppPreviews;

use Inventas\AppStoreConnectKit\Api\Dto\AppPreviewCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appPreviews_createInstance
 */
class AppPreviewsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/appPreviews';
    }

    public function __construct(
        protected AppPreviewCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
