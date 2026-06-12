<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppCustomProductPageVersions;

use Inventas\AppStoreConnectKit\Api\Dto\AppCustomProductPageVersionUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appCustomProductPageVersions_updateInstance
 */
class AppCustomProductPageVersionsUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/appCustomProductPageVersions/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected AppCustomProductPageVersionUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
