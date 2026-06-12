<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSets;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardSetGameCenterLeaderboardsLinkagesRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterLeaderboardSets_gameCenterLeaderboards_replaceToManyRelationship
 */
class GameCenterLeaderboardSetsGameCenterLeaderboardsReplaceToManyRelationship extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterLeaderboardSets/{$this->id}/relationships/gameCenterLeaderboards";
    }

    public function __construct(
        protected string $id,
        protected GameCenterLeaderboardSetGameCenterLeaderboardsLinkagesRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
