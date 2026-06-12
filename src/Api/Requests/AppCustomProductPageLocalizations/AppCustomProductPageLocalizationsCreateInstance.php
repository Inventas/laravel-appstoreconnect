<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppCustomProductPageLocalizations;

use Inventas\AppStoreConnectKit\Api\Dto\AppCustomProductPageLocalizationCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appCustomProductPageLocalizations_createInstance
 */
class AppCustomProductPageLocalizationsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/appCustomProductPageLocalizations';
    }

    public function __construct(
        protected AppCustomProductPageLocalizationCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
