<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appStoreVersions_appStoreReviewDetail_getToOneRelationship
 */
class AppStoreVersionsAppStoreReviewDetailGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appStoreVersions/{$this->id}/relationships/appStoreReviewDetail";
    }

    public function __construct(
        protected string $id,
    ) {}
}
