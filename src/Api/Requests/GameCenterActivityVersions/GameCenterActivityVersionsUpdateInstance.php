<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivityVersions;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterActivityVersionUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterActivityVersions_updateInstance
 */
class GameCenterActivityVersionsUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterActivityVersions/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected GameCenterActivityVersionUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
