<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallengeVersionReleases;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterChallengeVersionReleases_deleteInstance
 */
class GameCenterChallengeVersionReleasesDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterChallengeVersionReleases/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
