<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivityImages;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterActivityImages_deleteInstance
 */
class GameCenterActivityImagesDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterActivityImages/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
