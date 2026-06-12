<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterDetails_gameCenterGroup_getToOneRelationship
 */
class GameCenterDetailsGameCenterGroupGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterDetails/{$this->id}/relationships/gameCenterGroup";
    }

    public function __construct(
        protected string $id,
    ) {}
}
