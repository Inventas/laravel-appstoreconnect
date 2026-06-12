<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementReleases;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterAchievementReleases_deleteInstance
 */
class GameCenterAchievementReleasesDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterAchievementReleases/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
