<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallengeImages;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterChallengeImages_deleteInstance
 */
class GameCenterChallengeImagesDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterChallengeImages/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
