<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppClipHeaderImages;

use Inventas\AppStoreConnectKit\Api\Dto\AppClipHeaderImageCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appClipHeaderImages_createInstance
 */
class AppClipHeaderImagesCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/appClipHeaderImages';
    }

    public function __construct(
        protected AppClipHeaderImageCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
