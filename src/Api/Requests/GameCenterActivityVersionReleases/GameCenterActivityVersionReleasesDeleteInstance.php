<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivityVersionReleases;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterActivityVersionReleases_deleteInstance
 */
class GameCenterActivityVersionReleasesDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterActivityVersionReleases/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
