<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterGroups;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterGroupGameCenterLeaderboardSetsLinkagesRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterGroups_gameCenterLeaderboardSets_replaceToManyRelationship
 */
class GameCenterGroupsGameCenterLeaderboardSetsReplaceToManyRelationship extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterGroups/{$this->id}/relationships/gameCenterLeaderboardSets";
    }

    public function __construct(
        protected string $id,
        protected GameCenterGroupGameCenterLeaderboardSetsLinkagesRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
