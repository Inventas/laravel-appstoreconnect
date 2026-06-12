<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallengeVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterChallengeVersions_defaultImage_getToOneRelationship
 */
class GameCenterChallengeVersionsDefaultImageGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterChallengeVersions/{$this->id}/relationships/defaultImage";
    }

    public function __construct(
        protected string $id,
    ) {}
}
