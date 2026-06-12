<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppClipDefaultExperienceLocalizations;

use Inventas\AppStoreConnectKit\Api\Dto\AppClipDefaultExperienceLocalizationUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appClipDefaultExperienceLocalizations_updateInstance
 */
class AppClipDefaultExperienceLocalizationsUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/appClipDefaultExperienceLocalizations/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected AppClipDefaultExperienceLocalizationUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
