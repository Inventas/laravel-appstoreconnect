<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivityVersionReleases;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterActivityVersionReleaseCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterActivityVersionReleases_createInstance
 */
class GameCenterActivityVersionReleasesCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/gameCenterActivityVersionReleases';
    }

    public function __construct(
        protected GameCenterActivityVersionReleaseCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
