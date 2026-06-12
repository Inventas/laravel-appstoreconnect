<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppClipAdvancedExperiences;

use Inventas\AppStoreConnectKit\Api\Dto\AppClipAdvancedExperienceUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appClipAdvancedExperiences_updateInstance
 */
class AppClipAdvancedExperiencesUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/appClipAdvancedExperiences/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected AppClipAdvancedExperienceUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
