<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppInfoLocalizations;

use Inventas\AppStoreConnectKit\Api\Dto\AppInfoLocalizationUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appInfoLocalizations_updateInstance
 */
class AppInfoLocalizationsUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/appInfoLocalizations/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected AppInfoLocalizationUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
