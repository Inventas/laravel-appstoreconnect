<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppClipDefaultExperienceLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appClipDefaultExperienceLocalizations_appClipHeaderImage_getToOneRelationship
 */
class AppClipDefaultExperienceLocalizationsAppClipHeaderImageGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appClipDefaultExperienceLocalizations/{$this->id}/relationships/appClipHeaderImage";
    }

    public function __construct(
        protected string $id,
    ) {}
}
