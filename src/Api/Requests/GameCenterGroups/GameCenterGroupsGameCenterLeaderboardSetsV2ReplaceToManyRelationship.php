<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterGroups;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterGroupGameCenterLeaderboardSetsV2linkagesRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterGroups_gameCenterLeaderboardSetsV2_replaceToManyRelationship
 */
class GameCenterGroupsGameCenterLeaderboardSetsV2ReplaceToManyRelationship extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterGroups/{$this->id}/relationships/gameCenterLeaderboardSetsV2";
    }

    public function __construct(
        protected string $id,
        protected GameCenterGroupGameCenterLeaderboardSetsV2linkagesRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
