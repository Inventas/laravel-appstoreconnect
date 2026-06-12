<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppClipDefaultExperiences;

use Inventas\AppStoreConnectKit\Api\Dto\AppClipDefaultExperienceCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appClipDefaultExperiences_createInstance
 */
class AppClipDefaultExperiencesCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/appClipDefaultExperiences';
    }

    public function __construct(
        protected AppClipDefaultExperienceCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
