<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivityLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterActivityLocalizations_image_getToOneRelationship
 */
class GameCenterActivityLocalizationsImageGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterActivityLocalizations/{$this->id}/relationships/image";
    }

    public function __construct(
        protected string $id,
    ) {}
}
