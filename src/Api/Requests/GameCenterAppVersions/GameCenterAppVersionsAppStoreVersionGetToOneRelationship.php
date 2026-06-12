<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterAppVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterAppVersions_appStoreVersion_getToOneRelationship
 */
class GameCenterAppVersionsAppStoreVersionGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterAppVersions/{$this->id}/relationships/appStoreVersion";
    }

    public function __construct(
        protected string $id,
    ) {}
}
