<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppClipAdvancedExperienceImages;

use Inventas\AppStoreConnectKit\Api\Dto\AppClipAdvancedExperienceImageUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appClipAdvancedExperienceImages_updateInstance
 */
class AppClipAdvancedExperienceImagesUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/appClipAdvancedExperienceImages/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected AppClipAdvancedExperienceImageUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
