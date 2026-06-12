<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appStoreVersions_appStoreVersionSubmission_getToOneRelationship
 */
class AppStoreVersionsAppStoreVersionSubmissionGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appStoreVersions/{$this->id}/relationships/appStoreVersionSubmission";
    }

    public function __construct(
        protected string $id,
    ) {}
}
