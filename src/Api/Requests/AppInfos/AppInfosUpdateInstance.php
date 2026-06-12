<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppInfos;

use Inventas\AppStoreConnectKit\Api\Dto\AppInfoUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appInfos_updateInstance
 */
class AppInfosUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/appInfos/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected AppInfoUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
