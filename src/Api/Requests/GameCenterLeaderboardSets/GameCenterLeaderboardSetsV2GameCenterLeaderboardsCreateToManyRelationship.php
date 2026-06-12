<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSets;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardSetV2gameCenterLeaderboardsLinkagesRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterLeaderboardSetsV2_gameCenterLeaderboards_createToManyRelationship
 */
class GameCenterLeaderboardSetsV2GameCenterLeaderboardsCreateToManyRelationship extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/v2/gameCenterLeaderboardSets/{$this->id}/relationships/gameCenterLeaderboards";
    }

    public function __construct(
        protected string $id,
        protected GameCenterLeaderboardSetV2gameCenterLeaderboardsLinkagesRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
