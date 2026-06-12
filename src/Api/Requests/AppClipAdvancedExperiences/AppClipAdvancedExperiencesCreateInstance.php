<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppClipAdvancedExperiences;

use Inventas\AppStoreConnectKit\Api\Dto\AppClipAdvancedExperienceCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appClipAdvancedExperiences_createInstance
 */
class AppClipAdvancedExperiencesCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/appClipAdvancedExperiences';
    }

    public function __construct(
        protected AppClipAdvancedExperienceCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
