<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivityVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterActivityVersions_defaultImage_getToOneRelationship
 */
class GameCenterActivityVersionsDefaultImageGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterActivityVersions/{$this->id}/relationships/defaultImage";
    }

    public function __construct(
        protected string $id,
    ) {}
}
