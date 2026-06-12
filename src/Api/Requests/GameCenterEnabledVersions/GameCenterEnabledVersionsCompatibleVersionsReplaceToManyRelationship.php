<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterEnabledVersions;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterEnabledVersionCompatibleVersionsLinkagesRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterEnabledVersions_compatibleVersions_replaceToManyRelationship
 */
class GameCenterEnabledVersionsCompatibleVersionsReplaceToManyRelationship extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterEnabledVersions/{$this->id}/relationships/compatibleVersions";
    }

    public function __construct(
        protected string $id,
        protected GameCenterEnabledVersionCompatibleVersionsLinkagesRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
