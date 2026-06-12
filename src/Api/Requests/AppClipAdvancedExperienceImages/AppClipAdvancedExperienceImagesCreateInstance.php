<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppClipAdvancedExperienceImages;

use Inventas\AppStoreConnectKit\Api\Dto\AppClipAdvancedExperienceImageCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appClipAdvancedExperienceImages_createInstance
 */
class AppClipAdvancedExperienceImagesCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/appClipAdvancedExperienceImages';
    }

    public function __construct(
        protected AppClipAdvancedExperienceImageCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
