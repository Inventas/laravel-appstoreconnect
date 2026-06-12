<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivityLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterActivityLocalizations_deleteInstance
 */
class GameCenterActivityLocalizationsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterActivityLocalizations/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
