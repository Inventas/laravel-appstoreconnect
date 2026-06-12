<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievements;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterAchievements_releases_getToManyRelationship
 */
class GameCenterAchievementsReleasesGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterAchievements/{$this->id}/relationships/releases";
    }

    public function __construct(
        protected string $id,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
