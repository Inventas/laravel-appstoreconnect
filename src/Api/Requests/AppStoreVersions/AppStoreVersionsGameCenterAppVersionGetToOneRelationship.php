<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appStoreVersions_gameCenterAppVersion_getToOneRelationship
 */
class AppStoreVersionsGameCenterAppVersionGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appStoreVersions/{$this->id}/relationships/gameCenterAppVersion";
    }

    public function __construct(
        protected string $id,
    ) {}
}
