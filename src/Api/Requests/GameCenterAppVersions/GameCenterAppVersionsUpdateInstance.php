<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterAppVersions;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterAppVersionUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterAppVersions_updateInstance
 */
class GameCenterAppVersionsUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterAppVersions/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected GameCenterAppVersionUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
