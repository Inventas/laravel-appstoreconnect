<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionPhasedReleases;

use Inventas\AppStoreConnectKit\Api\Dto\AppStoreVersionPhasedReleaseUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appStoreVersionPhasedReleases_updateInstance
 */
class AppStoreVersionPhasedReleasesUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/appStoreVersionPhasedReleases/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected AppStoreVersionPhasedReleaseUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
