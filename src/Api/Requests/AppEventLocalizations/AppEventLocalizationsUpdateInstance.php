<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppEventLocalizations;

use Inventas\AppStoreConnectKit\Api\Dto\AppEventLocalizationUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appEventLocalizations_updateInstance
 */
class AppEventLocalizationsUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/appEventLocalizations/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected AppEventLocalizationUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
