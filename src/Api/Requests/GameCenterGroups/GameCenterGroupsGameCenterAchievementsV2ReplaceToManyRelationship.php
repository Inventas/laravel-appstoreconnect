<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterGroups;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterGroupGameCenterAchievementsV2linkagesRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterGroups_gameCenterAchievementsV2_replaceToManyRelationship
 */
class GameCenterGroupsGameCenterAchievementsV2ReplaceToManyRelationship extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterGroups/{$this->id}/relationships/gameCenterAchievementsV2";
    }

    public function __construct(
        protected string $id,
        protected GameCenterGroupGameCenterAchievementsV2linkagesRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
