<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionPhasedReleases;

use Inventas\AppStoreConnectKit\Api\Dto\AppStoreVersionPhasedReleaseCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appStoreVersionPhasedReleases_createInstance
 */
class AppStoreVersionPhasedReleasesCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/appStoreVersionPhasedReleases';
    }

    public function __construct(
        protected AppStoreVersionPhasedReleaseCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
