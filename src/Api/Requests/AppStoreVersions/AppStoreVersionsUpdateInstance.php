<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersions;

use Inventas\AppStoreConnectKit\Api\Dto\AppStoreVersionUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appStoreVersions_updateInstance
 */
class AppStoreVersionsUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/appStoreVersions/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected AppStoreVersionUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
