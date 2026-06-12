<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallengeLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterChallengeLocalizations_image_getToOneRelationship
 */
class GameCenterChallengeLocalizationsImageGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterChallengeLocalizations/{$this->id}/relationships/image";
    }

    public function __construct(
        protected string $id,
    ) {}
}
